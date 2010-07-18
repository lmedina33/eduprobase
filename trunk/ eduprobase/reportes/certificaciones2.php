<?php

require_once('../conexion.php');
define('XFS', '../');

require_once(XFS . 'pdf/pdf.php');
require_once(XFS . 'pdf/convert.php');

$cv = new convert();

$pdf = new _pdf();
$pdf->cp->selectFont(XFS . 'pdf/helvetica.afm');

$page_count = 0;
$coord_sum = 0;

$id_seccion = $_POST['seccion'];

$sql = 'SELECT *
	FROM secciones s, grado g
	WHERE s.id_seccion = ' . (int) $id_seccion . '
		AND s.id_grado = g.id_grado';
$ejecutar = mysql_query($sql);

$secciones = mysql_fetch_array($ejecutar);

$seleccionar = 'SELECT * FROM reinscripcion r, secciones s, grado g, alumno a
	WHERE r.id_grado = ' . $secciones['id_grado'] . '
		AND r.id_seccion = ' . $secciones['id_seccion'] . '
		AND r.anio = ' . date('Y') . '
		AND r.id_seccion = s.id_seccion
		AND r.id_alumno = a.id_alumno
		AND r.id_grado = g.id_grado';
$ejecutar = mysql_query($seleccionar); // || die (mysql_error());

$i = 0;
while ($arreglo = mysql_fetch_assoc($ejecutar))
{
	if ($i) $pdf->new_page();
	
	$pdf->cp->addJpegFromFile('../images/logo.jpg', 40, $pdf->cp->cy(125), 60); 
	
	$pdf->text(100, $pdf->top(75), 'COLEGIO MIXTO DE EDUCACION MEDIA CON ORIENTACION UNIVERSITARIA', 12, 'center', $pdf->page_width(125));
	$pdf->text(100, $pdf->top(18), '"CMEMOU"', 12, 'center', $pdf->page_width(125));
	$pdf->text(100, $pdf->top(15), 'Santa Elena, Flores, Pet&eacute;n.', 12, 'center', $pdf->page_width(125));
	
	$grado = ucwords(strtolower(implode(' ', array_splice(explode(' ', $arreglo['nombre']), 0, 2))));
	$grado_sub = '';
	
	switch ($arreglo['id_grado'])
	{
		case 3:
			$grado_sub = '';
			 break;
		case 4:
		case 5:
		case 6:
			$grado_sub = '';
			break;
		case 7:
		case 8:
		case 9:
			$grado_sub = '';
			break;
	}
	
	$text_block = 'El infrascrito Secretario del Colegio Mixto de Educaci&oacute;n Media con Orientaci&oacute;n Universitaria, Santa Elena de la Cruz, 
	Flores, Pet&eacute;n, Resoluci&oacute;n No. 161-2005 de fecha 21/10/2005 CERTIFICA: Que el(la) alumno(a) ' . $arreglo['nombre_alumno'] . ' ' . $arreglo['apellido'] . ' durante el 
	Ciclo Escolar ' . date('Y') . ' curs&oacute; el ' . $grado . ' del ' . $grado_sub . ', con C&oacute;digo Personal 
	No. ' . $arreglo['codigo_alumno'] . ', extendido por el Ministerio de Educaci&oacute;n, y que ha tenido a la vista los Cuadros de Registro de Evaluaci&oacute;n Final de fecha 
	31/10/' . date('Y') . ', donde consta que se hizo acreedor (a) a las notas siguientes:';
	
	$pdf->text_wrap($text_block, 9, $pdf->page_width() - 90, 35, $pdf->top(50), 15);
	
	$infot = array(
		array(
			array('text' => 'No.', 'align' => 'center', 'width' => 30),
			array('text' => 'Curso', 'align' => 'center'),
			array('text' => 'Nota', 'align' => 'center', 'width' => 30),
			array('text' => 'Nota en letras', 'align' => 'center'),
			array('text' => 'Resultado', 'align' => 'center', 'width' => 75)
		)
	);
	
	$sql = "SELECT *
		FROM cursos c, reinscripcion r
		WHERE r.id_grado = " . $secciones['id_grado'] . '
			AND r.id_seccion = ' . $secciones['id_seccion'] . '
			AND r.anio = ' . date('Y') . '
			AND r.id_grado = c.id_grado
			AND r.id_alumno = ' . (int) $arreglo['id_alumno'];
	$ejecutar2 = mysql_query($sql);
	
	$j = 1;
	while($arreglo2 = mysql_fetch_assoc($ejecutar2))
	{
		$sql = 'SELECT *
			FROM examenes
			WHERE examen NOT LIKE \'%Recup%\'
			ORDER BY id_examen';
		$ejecutar3 = mysql_query($sql);
		
		$per_curse = 0;
		$per_curse_f = 0;
		
		while ($row = mysql_fetch_array($ejecutar3))
		{
			$sql = 'SELECT *
				FROM notas
				WHERE id_alumno = ' . $arreglo['id_alumno'] . '
					AND id_grado = ' . $arreglo['id_grado'] . '
					AND id_curso = ' . $arreglo2['id_curso'] . '
					AND id_bimestre = ' . $row['id_examen'];
			$ejecutar4 = mysql_query($sql);
			$notas = mysql_fetch_assoc($ejecutar4);
			
			$total = $notas['nota'] + $notas['nota2'];
			
			$per_curse += $total;
			
			if ($total) $per_curse_f++;
			
			/*if ($total)
			{
				if (!isset($note_sum[$row['id_examen']]))
				{
					$note_sum[$row['id_examen']] = 0;
				}
				
				if (!isset($note_quant[$row['id_examen']]))
				{
					$note_quant[$row['id_examen']] = 0;
				}
				
				$note_sum[$row['id_examen']] += $total;
				$note_quant[$row['id_examen']]++;
			}*/
		}
		
		if (!$per_curse_f) $per_curse_f = 1;
		
		$per_sum = number_format($per_curse / $per_curse_f, 0);
		
		$resultado = ($per_sum >= 60) ? 'Aprobado' : 'No aprobado';
		if (!$per_sum) $resultado = '';
		
		$infot[$j] = array(
			array('text' => $j, 'align' => 'center', 'width' => 25),
			array('text' => $arreglo2['nombre_curso'], 'align' => 'left'),
			array('text' => $per_sum, 'align' => 'center', 'width' => 30),
			array('text' => ucfirst($cv->cv($per_sum)), 'align' => 'left'),
			array('text' => $resultado, 'align' => 'center', 'width' => 75)
		);
		
		$j++;
	}
	
	$pdf->multitable($infot, 35, $pdf->top(100), 5, 9, 1, array('last_height' => $pdf->top()));
	
	$text_block = 'En fe de lo anterior se extiende el presente certificado en Santa Elena de la Cruz, Flores, Pet&eacute;n, 
	a los treinta y un d&iacute;as de octubre de ' . $cv->cv(date('Y')) . '.';
	
	$pdf->text_wrap($text_block, 9, $pdf->page_width() - 90, 35, $pdf->top(50), 15);
	
	$names = array(array(
		array('text' => 'Profa. Esperanza Trinidad G&oacute;mez Ayala', 'align' => 'center'),
		array('text' => 'Prof. Jorge Antonio Ochaeta Requena', 'align' => 'center')
	),
	array(
		array('text' => 'Directora', 'align' => 'center'),
		array('text' => 'Secretario', 'align' => 'center')
	));
	
	$pdf->multitable($names, 35, $pdf->top(85), 5, 9, 0);
	
	$i++;
}

$pdf->cp->ezOutput();
$pdf->cp->stream();
die();

?>