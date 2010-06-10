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
		<div class="title"> Mantenimiento de Pagos </div>
<table width="732" border="0">
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td width="194">&nbsp;</td>
    <td width="392"><div class="text1"><a href="ingrepagos.php">Ingreso de Pagos </a></div></td>
    <td width="132">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><div class="text1">Modificacion de Ingreso de Pagos, Seleccione: </div></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><form id="form1" name="form1" method="get" action="modingrepagos.php">
        <label>
          <select id="grado" name="grado">
            <?php
                        
                        $seleccionar = "SELECT * FROM grado";
                        $ejecutar = mysql_query($seleccionar);
                        
                        //echo '<option value="0">Seleccione </option>';
                        //por cada registro encontrado en la tabla me genera un <option>
                        while ($arreglo = mysql_fetch_array($ejecutar))
                        {
                        	echo '<option value="' . $arreglo['id_grado'] . '" >' . $arreglo['nombre'] . '</option>';
                        }
                        
                        ?>
          </select>
          <input type="submit" name="Submit" value="Ir..." />
          </label>
      </form>      </td>
    <td>&nbsp;</td>
  </tr>
</table>
  <br />
  <br />
  <br /></td>

</tr>
</table>
</body>
</html>
