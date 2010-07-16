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
        <form id="form1" name="form1" method="get" action="">
        
            <?php 
		
		$id_grado = $_GET['grado'];
		

		$seleccionar = "SELECT * FROM  fpagos f, grado g WHERE f.id_grado = '$id_grado' AND f.id_grado = g.id_grado ORDER BY f.id_fpagos ASC";
		$ejecutar = mysql_query($seleccionar);
		
		while($arreglo = mysql_fetch_assoc($ejecutar))
		{
		?>
          <table width="709" border="0">
            <tr>
              <td class="text1" width="62"></td>
              <td class="text1" width="209" align="left"><?php echo $arreglo['nombre']; ?></td>
              <td class="text1" width="178" align="left"><?php echo $arreglo['nombre_fpagos']; ?> </td>
              <td class="text1" width="122" align="left"><?php echo $arreglo['precio_fpagos'];?></td>
              <td class="text1" width="52" align="left"><div align="center"><a href="modpagos.php?id_fpagos=<?php echo $arreglo['id_fpagos']; ?>"><img src="../tools.png" width="25" height="25" border="0" title="Modificaci&oacute;n de Pago..." /></a>Mod</div></td>
              <td class="text1" width="60" align="left"><div align="center"><a href="delfpagos.php?id_fpagos=<?php echo $arreglo['id_fpagos'];?>"><img src="../cancel_sign.png" width="25" height="25" border="0" title="Eliminar Forma de Pago..." /></a>Del</div></td>
            </tr>
          </table>
          <?php } ?>
<p>&nbsp;</p>
        </form>
    </td>

</tr>
</table>
</body>
</html>