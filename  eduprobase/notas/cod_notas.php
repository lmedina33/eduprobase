<?php

require_once('../conexion.php');

$curso = $_POST['curso'];
$examen = $_POST['examen'];
$grado = $_POST['grado'];
$nota = $_POST['nota'];
$remedial = $_POST['remedial'];

foreach ($nota as $alumno => $valor)
{
	$valor = (int) $valor;
	
	if (!$valor)
	{
		continue;
	}
	
	$sql = 'INSERT INTO notas (id_alumno, id_grado, id_curso, id_bimestre, nota)
		' . "VALUES ('" . $alumno . "', '" . (int) $grado . "', '" . (int) $curso . "', '" . (int) $examen . "', '" . (int) $valor . "')";
	$ejecutar = mysql_query($sql);
}

foreach ($remedial as $alumno => $valor)
{
	$valor = (int) $valor;
	
	if (!$valor)
	{
		continue;
	}
	
	$sql = 'SELECT *
		FROM notas
		WHERE id_alumno = ' . (int) $alumno . '
			AND id_grado = ' . (int) $grado . '
			AND id_curso = ' . (int) $curso . '
			AND id_bimestre = ' . (int) $examen;
	$ejecutar2 = mysql_query($sql);
	
	if ($result2 = mysql_fetch_array($ejecutar2))
	{
		$sql = 'UPDATE notas SET nota2 = ' . $valor . '
			WHERE id_nota = ' . $result2['id_nota'];
		$update = mysql_query($sql);
	}
	else
	{
		$sql = 'INSERT INTO notas (id_alumno, id_grado, id_curso, id_bimestre, nota2)
			' . "VALUES ('" . $alumno . "', '" . (int) $grado . "', '" . (int) $curso . "', '" . (int) $examen . "', '" . (int) $valor . "')";
		$insertar = mysql_query($sql);
	}
}

header('Location: index.php');
exit;

?>