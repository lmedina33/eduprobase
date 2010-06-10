<?php 
$toproot = '../../';

require_once('../../conexion.php');

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
<title>Ingreso de Formas de Pagos</title>
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
    } } } else if (test.charAt(0) == 'R') errors += '- '+nm+' es requerido.\n'; }
  } if (errors) alert('Complete los Siguientes Campos:\n'+errors);
  document.MM_returnValue = (errors == '');
}
//-->
</script>
</head>

<body>

<table width="850" border="0" align="center">
<tr>
<div align="center"><a href="../index.php"><img src="../logo1.jpg" border="0" /></a>
 </div>
</tr>
<tr>
<td width="850" bgcolor="#FFFFFF"><?php include('../menu2.php'); ?><div class="title">Ingreso de Formas de Pago</div>
  <form action="cod_ingrepagos.php" method="post" name="form1" id="form1" onsubmit="return validar();">
    <table width="800" border="0">
      <tr>
        <td width="203">&nbsp;</td>
        <td width="587">&nbsp;</td>
      </tr>
      <tr>
        <td><div align="right">Forma de Pago: </div></td>
        <td><label>
          <input name="pago" type="text" id="pago" size="40" />
        </label></td>
      </tr>
      <tr>
        <td><div align="right">Precio:</div></td>
        <td><label>
          <div class="text1"><input name="precio" type="text" id="precio" size="8" align="center" />
        Quetzales.</div></label></td>
      </tr>
      <tr>
        <td><div align="right">Status:</div></td>
        <td><label>
          <select name="status" id="status">
            <option value="Alta">Alta</option>
            <option value="Baja">Baja</option>
          </select>
        </label></td>
      </tr>
      <tr>
        <td><div align="right">Observaciones:</div></td>
        <td><label>
          <textarea name="observaciones" cols="40" id="observaciones"></textarea>
        </label></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><div align="right">Para el Grado: </div></td>
        <td><select id="grado" name="grado">
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
						  </select></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><label>
          <div align="right">
            <input type="submit" name="Submit" value="Guardar Forma de Pago" />
            </div>
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

document.form1.pago.focus();

function validar(){

	if(!confirm('Seguro que Desea Guardar la Forma de Pago?'))
	{
	return false;
	}

MM_validateForm('pago','','R','precio','','R');return document.MM_returnValue;
}

</script>

