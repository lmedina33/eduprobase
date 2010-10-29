<?php 
$toproot = '../../';
require_once('../../conexion.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />

<title>Impresion de Recibo de Pago</title>
<style type="text/css">
<!--
.estilo2negro {
	font-size: 11px;
	color: #000000;
	font-family:tahoma;
}

.estilo2red{ font-size:11px; color:#990000; font-family:tahoma;}
-->
</style>
</head>
 <?php 
		 $id_tpagos = $_GET['id_tpagos'];
		 
		  $seleccionar = "SELECT * FROM tpagos t, alumno a, fpagos f, grado g, reinscripcion r 
		  WHERE t.id_alumno = r.id_alumno AND
		   r.id_grado = g.id_grado AND 
		   a.id_alumno = t.id_alumno AND 
		   f.id_fpagos = t.id_fpagos AND
		   t.id_tpagos = '$id_tpagos'
		   ORDER BY t.id_tpagos DESC LIMIT 10";
		  $ejecutar = mysql_query($seleccionar);
		  if($arreglo = mysql_fetch_assoc($ejecutar))
		  {
		  }
		  ?>

<body>
<table width="695" border="0" align="center">
  <tr>
    <td width="70"><div class="estilo2red"> Carne </div> <div class="estilo2negro"> <?php echo $arreglo['carne'];?> </div></td>
    <td width="403"><div class="estilo2red"> Apellido, Nombre </div> <div class="estilo2negro"><?php echo $arreglo['apellido'];?> , <?php echo $arreglo['nombre_alumno'];?></div></td>
    <td width="208"><div class="estilo2red"> Pago </div> <div class="estilo2negro"> <?php echo $arreglo['precio_fpagos'];?></div></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><div class="estilo2red"> Pago en Letras </div></td>
    <td><div class="estilo2red"> Fecha de Pago </div> <div class="estilo2negro"> <?php echo $arreglo['fecha_tpagos'];?> </div></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><div class="estilo2red"> Descripcion </div> <div class="estilo2negro"> <?php echo $arreglo['nombre_fpagos'];?> </div></td>
    <td><div class="estilo2red"> Grado Cursante </div> <div class="estilo2negro"><?php echo $arreglo['nombre'];?> </div></td>
  </tr>
</table>
</body>
</html>
