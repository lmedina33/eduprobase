<?php 
$toproot = '../../';

require_once('../../conexion.php');

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
<title>Modulo de Mantenimientos</title>
<link rel="stylesheet" type="text/css" href="../style2.css" />
</head>

<body>



<table width="850" border="0" align="center">
<tr> 
<div align="center"><a href="../index.php"><img src="../logo1.jpg" border="0" title="Ir al INICIO PRINCIPAL" /></a> 
</div>
</tr>
<tr>
<td width="850" bgcolor="#FFFFFF">
	<?php include('../menu2.php'); ?>
		<div class="title"> Visualizacion de Pagos del Grado</div>
        <br />
		<?php 
		
		$id_grado = $_GET['grado'];
		

		$seleccionar = "SELECT * FROM  fpagos f, grado g WHERE f.id_grado = '$id_grado' AND f.id_grado = g.id_grado ORDER BY f.id_fpagos ASC";
		$ejecutar = mysql_query($seleccionar);
		
		while($arreglo = mysql_fetch_assoc($ejecutar))
		{
		?>
		
		
  <br />
  <table width="800" border="0">
  <tr>
  <td class="text1" width="50"></td>
  <td class="text1" width="150" align="left"><?php echo $arreglo['nombre']; ?></td>
  <td class="text1" width="100" align="left"><?php echo $arreglo['nombre_fpagos']; ?> </td>
  <td class="text1" width="75" align="left"><?php echo $arreglo['precio_fpagos'];?> </td>

  </tr>
  </table>
  <?php } ?>
  </td>

</tr>
</table>
</body>
</html>
