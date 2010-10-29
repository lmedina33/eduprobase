<?php
$toproot = '../../';
require_once('../../conexion.php');
/*
$carne = $_GET['carne'];
$anio = date('Y');
$seleccionar = "SELECT * FROM alumno a, reinscripcion r, grado g WHERE a.carne ='$carne' AND a.id_alumno = r.id_alumno AND r.anio = '$anio' AND r.id_grado = g.id_grado";
$ejecutar = mysql_query($seleccionar);

if (!$arreglo = mysql_fetch_assoc($ejecutar))
{
	header('location: index.php');
}*/
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
		<div class="title"> &Uacute;ltimas 10 Transacciones de Pagos</div>
        
        <table width="800" border="0" bordercolor="#006600" align="center">
          <tr>
		  <?php 
		  $seleccionar = "SELECT * FROM tpagos t, alumno a, fpagos f WHERE a.id_alumno = t.id_alumno AND f.id_fpagos = t.id_fpagos ORDER BY t.id_tpagos DESC LIMIT 10";
		  $ejecutar = mysql_query($seleccionar);
		  while($arreglo = mysql_fetch_assoc($ejecutar))
		  {
		  ?>
            <td width="72" class="text4blue"><?php echo $arreglo['carne']; ?> </td>
            <td width="43" class="text1" align="center"><a href="recibo.php?id_tpagos=<?php echo $arreglo['id_tpagos'];?>" target="_blank"><img src="../../images/iconos/39.ico" border="0" /></a></td>
            <td width="272" class="text1"><?php echo $arreglo['apellido'];?> , <?php echo $arreglo['nombre_alumno'];?></td>
			<td width="142" class="text1"><?php echo $arreglo['fecha_tpagos'];?></td>
            <td width="249"><span class="text1"><?php echo $arreglo['nombre_fpagos'];?></span></td>
          </tr><?php } ?>
		     </table>
        <br />
  </td>

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
