<?php

require_once('../conexion.php');

$curso = $_POST['curso'];
$examen = $_POST['examen'];
$grado = $_POST['grado'];
$nota = $_POST['nota'];
$nota2 = $_POST['nota2'];

foreach ($nota as $alumno => $valor)
{
	$valor = (int) $valor;
	$valor2 = (int) $nota2[$alumno];
	
	$sql = 'SELECT *
		FROM notas
		WHERE id_alumno = ' . (int) $alumno . '
			AND id_grado = ' . (int) $grado . '
			AND id_curso = ' . (int) $curso . '
			AND id_bimestre = ' . (int) $examen;
	$ejecutar_notas = mysql_query($sql);
	
	if ($cada_nota = mysql_fetch_array($ejecutar_notas))
	{
		if (!$valor && !$valor2)
		{
			$sql = 'DELETE FROM notas
				WHERE id_nota = ' . $cada_nota['id_nota'];
			mysql_query($sql);
			continue;
		}
		
		$sql = 'UPDATE notas SET nota = ' . $valor . ', nota2 = ' . $valor2 . '
			WHERE id_nota = ' . $cada_nota['id_nota'];
		mysql_query($sql);
	}
	else
	{
		if (!$valor && !$valor2)
		{
			continue;
		}
		
		$sql = 'INSERT INTO notas (id_alumno, id_grado, id_curso, id_bimestre, nota, nota2)
			' . "VALUES ('" . $alumno . "', '" . (int) $grado . "', '" . (int) $curso . "', '" . (int) $examen . "', '" . $valor . "', '" . $valor2 . "')";
		mysql_query($sql);
	}
}

header('Location: index.php');
exit;

?>