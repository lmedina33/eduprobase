<?php 
$toproot = '../../';

require_once('../../conexion.php');

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
<title>Pagos de Colegiatura</title>
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
	<?php $anio = date('Y'); ?>
		<div class="title"> Consultas de Pagos <?php echo $anio; ?></div>
        <br />
		<table align="center" width="" border="0">
		<tr>
		<td><div class="text1">Ingrese el Carn&eacute;</div></td>
		<td><form id="form1" name="form1" method="get" action="cpagos.php">
		  <label>
		  <input name="carne" type="text" id="carne" size="15" />
		  <input type="submit" name="Submit" value="Ir..." />
		  </label>
                        </form></td>
		</tr>
		</table>
  <br />
  <br /></td>

</tr>
</table>
</body>
</html>
<script language="JavaScript" type="text/javascript">
document.form1.carne.focus();
</script>
