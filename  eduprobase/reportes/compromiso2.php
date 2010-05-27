<?php

require_once("../conexion.php");

$id_alumno = $_GET['id_alumno'];

$seleccionar = "SELECT * FROM alumno a WHERE a.id_alumno = '$id_alumno' ";
$ejecutar = mysql_query($seleccionar); // || die (mysql_error());

if($arreglo = mysql_fetch_assoc($ejecutar))
{
	
}

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Compromiso p&aacute;gina 2</title>
<style type="text/css">
<!--
.Estilo6 {font-size: 24px}
-->
</style>
</head>

<body>
<table width="792" border="0">
  <tr>
    <td>
      <p align="justify">segunda hoja de CMEMOU, ver estructura... </p>
    </td>
  </tr>
</table>
</body>
</html>