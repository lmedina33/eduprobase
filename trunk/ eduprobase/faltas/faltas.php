<?php

require_once('../conexion.php');

$carne = $_GET['carne'];

$seleccionar = "SELECT * FROM alumno WHERE carne ='$carne'";
$ejecutar = mysql_query($seleccionar);

if(!$arreglo = mysql_fetch_assoc($ejecutar))
{
	header('location: index.php');
}

?>

<div id="content" class="float-holder">
			<div id="cuadro">
			<div id="ini"><a href="../index.php"><img src="../images/inicio.jpg" /></a></div>
			<div id="men"><img src="../images/menu.jpg" /></div>
			<div id="exit"><a href="../exit.php"><img src="../images/exit.jpg" /></a></div>
		</div><!-- fin del cuadro-->
	<div id="content2">
		<?php include('../menu.php'); ?>
		<? encabezado('Faltas Academicas'); ?>		
		<div class="title"> Modulo de Ingreso de Falta Acad&eacute;micas </div>
	</div>

<table border="0" align="center">
  <tr>
    <td><form action="cod_falta.php" method="post" name="formulario" id="formulario" onsubmit="return validar();">
      <table border="0" align="center">
        <tr>
          <td valign="top">&nbsp;</td>
          <td></td>
        </tr>
        <tr>
          <td valign="top"></td>
          <td>
              <table align="center">
                <tr >
                  <td><table border="0" align="center">
                      <tr>
                        <td width="3" class="text1">&nbsp;</td>
                        <td width="184" class="Estilo6">Datos Alumno: </td>
                        <td width="319"><label>
                          <input name="id_alumno" type="hidden" id="id_alumno" value="<?php echo $arreglo['id_alumno']; ?>" />
                          <input name="carnet" type="hidden" id="carnet" value="<?php echo $arreglo['carne']; ?>" />
                        </label></td>
                      </tr>
                      <tr>
                        <td class="text1">&nbsp;</td>
                        <td class="text1"><div align="right">Carn&eacute;:</div></td>
                        <td><label><span class="text1">
                          <input name="carne" type="text" id="carne" size="20"  autocomplete="off" value="<?php echo $arreglo['carne']; ?>" disabled="disabled" />
                        </span></label></td>
                      </tr>
                      <tr>
                        <td class="text1">&nbsp;</td>
                        <td class="text1">&nbsp;</td>
                        <td><label></label></td>
                      </tr>
                      <tr>
                        <td class="text1">&nbsp;</td>
                        <td class="text1"><div align="right">Nombre:</div></td>
                        <td class="text1"><input name="nombre" type="text" id="nombre" size="60"  autocomplete="off" value="<?php echo $arreglo['nombre_alumno']; ?>" disabled="disabled" /></td>
                      </tr>
                      <tr>
                        <td class="text1">&nbsp;</td>
                        <td class="text1"><div align="right">Apellido:</div></td>
                        <td class="text1"><input name="apellido" type="text" id="apellido" size="60"  autocomplete="off" value="<?php echo $arreglo['apellido']; ?>" disabled="disabled" /></td>
                      </tr>
                      <tr>
                        <td class="text1">&nbsp;</td>
                        <td class="text1">&nbsp;</td>
                        <td class="text1">&nbsp;</td>
                      </tr>
                      <tr>
                        <td class="text1">&nbsp;</td>
                        <td class="Estilo6">Datos Padres: </td>
                        <td class="text1">&nbsp;</td>
                      </tr>
                      <tr>
                        <td class="text1">&nbsp;</td>
                        <td class="text1"><div align="right">Padre:</div></td>
                        <td class="text1"><input name="padre" type="text" id="padre" size="60"  autocomplete="off" value="<?php echo $arreglo['padre']; ?>" disabled="disabled" /></td>
                      </tr>
                      <tr>
                        <td class="text1"><div align="right"></div></td>
                        <td class="text1"><div align="right">Madr&eacute;:</div></td>
                        <td class="text1"><input name="madre" type="text" id="madre" size="60"  autocomplete="off" value="<?php echo $arreglo['madre']; ?>" disabled="disabled" /></td>
                      </tr>
                      <tr>
                        <td class="text1">&nbsp;</td>
                        <td class="text1">&nbsp;</td>
                        <td class="text1">&nbsp;</td>
                      </tr>
                      <tr>
                        <td class="text1">&nbsp;</td>
                        <td class="Estilo4">&nbsp;</td>
                        <td class="Estilo4"><label></label></td>
                      </tr>
                  </table>
                  <div class="title">Ingresar Falta Acad&eacute;mica </div>
                
                  	<table border="0">
                      <tr>
                        <td width="115">&nbsp;</td>
                        <td width="208" class="text1"><div align="right">Tipo:</div></td>
                        <td width="442"><label>
                          <select name="tipo_falta" id="tipo_falta" >
                            <option value="Baja">Baja</option>
                            <option value="Media">Media</option>
                            <option value="Alta">Alta</option>
                          </select>
                        </label></td>
                      </tr>
                      <tr>
                        <td>&nbsp;</td>
                        <td><div align="right" class="text1">Falta Acad&eacute;mica: </div></td>
                        <td><label>
                          <textarea name="falta" cols="60" id="falta" ></textarea>
                        </label></td>
                      </tr>
                      <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                      </tr>
                      <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td><label>
                          <input type="submit" name="Submit" value="Guardar Falta Acad&eacute;mica..." />

                        </label></td>
                      </tr>
                  </table></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                </tr>
            </table></td>
        </tr>
      </table>
    </form>
    </td>
  </tr>
</table></div>
</body>
</html>
<script language="JavaScript" type="text/javascript">
document.formulario.falta.focus();
</script>
<script type="text/JavaScript">
<!--
function validar(){
if(!confirm("Seguro que Desea Guardar Falta Academica")){
return false;
}
MM_validateForm('falta','','R');return document.MM_returnValue;
}

//-->
</script>


<script language="JavaScript" type="text/javascript">
function alerta(){
return window.confirm("�Seguro que desea Realizar la Acci�n...?");}
</script>
