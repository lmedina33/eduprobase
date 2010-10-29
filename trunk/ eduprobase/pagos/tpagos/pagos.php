<?php
$toproot = '../../';
require_once('../../conexion.php');

$carne = $_GET['carne'];
$anio = date('Y');
$seleccionar = "SELECT * FROM alumno a, reinscripcion r, grado g WHERE a.carne ='$carne' AND a.id_alumno = r.id_alumno AND r.anio = '$anio' AND r.id_grado = g.id_grado";
$ejecutar = mysql_query($seleccionar);

if (!$arreglo = mysql_fetch_assoc($ejecutar))
{
	header('location: index.php');
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
<title>Pagos de Colegiatura</title>
<link rel="stylesheet" type="text/css" href="../style2.css" />
<script type="text/JavaScript">
<!--
function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_validateForm() { //v4.0
  var i,p,q,nm,test,num,min,max,errors='',args=MM_validateForm.arguments;
  for (i=0; i<(args.length-2); i+=3) { test=args[i+2]; val=MM_findObj(args[i]);
    if (val) { nm=val.name; if ((val=val.value)!="") {
      if (test.indexOf('isEmail')!=-1) { p=val.indexOf('@');
        if (p<1 || p==(val.length-1)) errors+='- '+nm+' must contain an e-mail address.\n';
      } else if (test!='R') { num = parseFloat(val);
        if (isNaN(val)) errors+='- '+nm+' must contain a number.\n';
        if (test.indexOf('inRange') != -1) { p=test.indexOf(':');
          min=test.substring(8,p); max=test.substring(p+1);
          if (num<min || max<num) errors+='- '+nm+' must contain a number between '+min+' and '+max+'.\n';
    } } } else if (test.charAt(0) == 'R') errors += '- '+nm+' is required.\n'; }
  } if (errors) alert('The following error(s) occurred:\n'+errors);
  document.MM_returnValue = (errors == '');
}
//-->
</script>
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
		<div class="title"> Transacciones de Pagos</div>
        <br />
        <form action="tcodpagos.php" method="post" name="form1" id="form1" onsubmit="return validar();">
          <table width="583" border="0" align="center">
            <tr>
              <td width="3" class="text1">&nbsp;</td>
              <td width="138" class="Estilo6"><div class="text2">Datos Alumno: </div></td>
              <td width="428"><label>
                <input name="id_alumno" type="hidden" id="id_alumno" value="<?php echo $arreglo['id_alumno']; ?>" />
                <input name="carnet" type="hidden" id="carnet" value="<?php echo $arreglo['carne']; ?>" />
              </label></td>
            </tr>
            <tr>
              <td class="text1">&nbsp;</td>
              <td class="text1"><div align="right" class="text1">Carn&eacute;:</div></td>
              <td><label><span class="text1">
                <input name="carne" type="text" id="carne" aurotomplete="off" size="20"  autocomplete="off" value="<?php echo $arreglo['carne']; ?>" disabled="disabled" />
              </span></label></td>
            </tr>
            <tr>
              <td class="text1">&nbsp;</td>
              <td class="text1">&nbsp;</td>
              <td><label></label></td>
            </tr>
            <tr>
              <td class="text1">&nbsp;</td>
              <td class="text1"><div align="right" class="text1">Nombre:</div></td>
              <td class="text1"><input name="nombre" type="text" id="nombre" aurotomplete="off" size="40"  autocomplete="off" value="<?php echo $arreglo['nombre_alumno']; ?>" disabled="disabled" /></td>
            </tr>
            <tr>
              <td class="text1">&nbsp;</td>
              <td class="text1"><div align="right" class="text1">Apellido:</div></td>
              <td class="text1"><input name="apellido" type="text" id="apellido" aurotomplete="off" size="40"  autocomplete="off" value="<?php echo $arreglo['apellido']; ?>" disabled="disabled" /></td>
            </tr>
            <tr>
              <td class="text1">&nbsp;</td>
              <td class="text1">&nbsp;</td>
              <td class="text1">&nbsp;</td>
            </tr>
            <tr>
              <td class="text1">&nbsp;</td>
              <td><div class="text2">Datos Padres: </div></td>
              <td class="text1">&nbsp;</td>
            </tr>
            <tr>
              <td class="text1">&nbsp;</td>
              <td class="text1"><div align="right" class="text1">Padre:</div></td>
              <td class="text1"><input name="padre" type="text" id="padre" aurotomplete="off" size="40"  autocomplete="off" value="<?php echo $arreglo['padre']; ?>" disabled="disabled" /></td>
            </tr>
            <tr>
              <td class="text1"><div align="right"></div></td>
              <td class="text1"><div align="right" class="text1">Madr&eacute;:</div></td>
              <td class="text1"><input name="madre" type="text" id="madre" aurotomplete="off" size="40"  autocomplete="off" value="<?php echo $arreglo['madre']; ?>" disabled="disabled" /></td>
            </tr>
            <tr>
              <td class="text1">&nbsp;</td>
              <td class="text1">&nbsp;</td>
              <td class="text1">&nbsp;</td>
            </tr>
            <tr>
              <td class="text1">&nbsp;</td>
              <td class="text2">Grado Cursante:</td>
              <td class="text3red"><?php echo $arreglo['nombre'];?>
              <input name="grado" type="hidden" id="grado" value="<?php echo $arreglo['id_grado'];?>" /></td>
            </tr>
            <tr>
              <td class="text1">&nbsp;</td>
              <td class="text2">&nbsp;</td>
              <td></td>
            </tr>
            <tr>
              <td class="text1">&nbsp;</td>
              <td class="text2">Pago a Cancelar:</td>
              <td class="text1"><select id="pago" name="pago">
                <?php
					$carne = $_GET['carne'];
					$anio = date('Y');
					
					$seleccionar = "SELECT * FROM fpagos f, reinscripcion r WHERE f.id_grado = r.id_grado AND r.carne = '$carne' AND r.anio = '$anio' ORDER BY f.id_fpagos ASC";
					$ejecutar = mysql_query($seleccionar);
					
					//echo '<option value="0">Seleccione </option>';
					//por cada registro encontrado en la tabla me genera un <option>
					while ($arreglo = mysql_fetch_array($ejecutar))
					{
						echo '<option value="' . $arreglo['id_fpagos'] . '" >' . $arreglo['nombre_fpagos'] . '</option>';
					}
					
					?>
                            </select></td>
            </tr>
            <tr>
              <td class="text1">&nbsp;</td>
              <td class="text2">&nbsp;</td>
              <td class="text1" align="right"><label>
                <input type="submit" name="Submit" value="Guardar Transaccion de Pago" />
              </label></td>
            </tr>
          </table>
      </form>
        <br />
  <br /></td>

</tr>
</table>
</body>
</html>
<script language="JavaScript" type="text/javascript">
document.form1.carne.focus();

function validar()
{
if(!confirm("Seguro que desea hacer la transaccion de pago..."))
{
return false;

}
"MM_validateForm('carne','','R','nombre','','R','apellido','','R','padre','','R','madre','','R');return document.MM_returnValue";
}

</script>
