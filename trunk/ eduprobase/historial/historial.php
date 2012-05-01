<?php

require_once('../conexion.php');

$carne = $_GET['carne'];

$seleccionar = "SELECT * FROM alumno WHERE carne ='$carne'";
$ejecutar = mysql_query($seleccionar);

if (!$arreglo = mysql_fetch_assoc($ejecutar))
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
		<? include('../menu.php');?>
		<? encabezado('Historial del Alumno');?>
		<div class="title">Ver Historial Completo del Alumno</div>
      
		  <form action="../reinscripcion/cod_reinscripcion.php" method="post" name="formulario" id="formulario" onsubmit="MM_validateForm('encargado','','R','telefonos','','R');return document.MM_returnValue">
              <table width="100%" align="center">
                  <tr>
                  <td><table align="center">
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
                        <td class="text1"><div align="right" class="text2">Carn&eacute;:</div></td>
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
                        <td class="text1"><div align="right" class="text2">Nombre:</div></td>
                        <td class="text1"><input name="nombre" type="text" id="nombre" aurotomplete="off" size="60"  autocomplete="off" value="<?php echo $arreglo['nombre_alumno']; ?>" disabled="disabled" /></td>
                      </tr>
                      <tr>
                        <td class="text1">&nbsp;</td>
                        <td class="text1"><div align="right" class="text2">Apellido:</div></td>
                        <td class="text1"><input name="apellido" type="text" id="apellido" aurotomplete="off" size="60"  autocomplete="off" value="<?php echo $arreglo['apellido']; ?>" disabled="disabled" /></td>
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
                        <td class="text1"><div align="right" class="text2">Padre:</div></td>
                        <td class="text1"><input name="padre" type="text" id="padre" aurotomplete="off" size="60"  autocomplete="off" value="<?php echo $arreglo['padre']; ?>" disabled="disabled" /></td>
                      </tr>
                      <tr>
                        <td class="text1"><div align="right"></div></td>
                        <td class="text1"><div align="right" class="text2">Madr&eacute;:</div></td>
                        <td class="text1"><input name="madre" type="text" id="madre" aurotomplete="off" size="60"  autocomplete="off" value="<?php echo $arreglo['madre']; ?>" disabled="disabled" /></td>
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
                 </form></td>
                </tr>
                <tr>
                  <td></td>
                </tr>
                <tr>
                  <td>
                  	</td>
                  	</tr>
                  	</table>
                  	
                  	<div class="rojo">Historial de Grados</div>
	
	<div class="blue" style="width: 99%; margin: 0 auto;">
		<table width="100%" border="0">
			<tr>
				<td class="textred" width="10%" align="center">A&ntilde;o</td>
			  <td class="textred" width="22%" align="center">Grado</td>
			  <td class="textred" width="31%">Encargado</td>
				<td class="textred" width="11%" align="left">Constancias</td>
				<td class="textred" width="4%" align="center">Notas</td>
				<td class="textred" width="22%" align="center">Certificado</td>
			</tr>
			
			<?php
			
			$sql = "SELECT *
				FROM reinscripcion r, alumno a, grado g, secciones s
				WHERE r.id_alumno = a.id_alumno
					AND r.id_grado = g.id_grado
					AND s.id_seccion = r.id_seccion
					AND s.id_grado = r.id_grado
					AND r.carne = '$carne'";
			$ejecutar = mysql_query($sql);
			
			while ($arreglo = mysql_fetch_assoc($ejecutar))
			{
			?>
			<tr>
				<td align="center" class="textblack"><?php echo $arreglo['anio']; ?></td>
				<td class="textblack"><?php echo $arreglo['nombre'] . ', secci&oacute;n: ' . $arreglo['nombre_seccion']; ?></td>
				<td class="textblack"><?php echo $arreglo['encargado_reinscripcion']; ?></td>
				<td align="center">
                <a href="../reportes/compromiso.php?id_alumno=<?php echo $arreglo['id_alumno']; ?>&amp;id_grado=<?php echo $arreglo['id_grado'];?>" target="_blank"><img src="../images/print.png" width="25" border="0" /></a> 
                <a href="../reportes/compromiso2.php?id_alumno=<?php echo $arreglo['id_alumno']; ?>&amp;id_grado=<?php echo $arreglo['id_grado']; ?>" target="_blank"><img src="../images/print.png" width="25" border="0" />                </td>
				<td align="center"><a href="../reportes/grado.php?id_alumno=<?php echo $arreglo['id_alumno']; ?>&amp;id_grado=<?php echo $arreglo['id_grado']; ?> " target="_blank"><img src="../images/nota.png" width="28" border="0" /></a></td>
				<td align="center">
					<form action="../reportes/certificaciones2.php" method="post" target="_blank">
						<input type="hidden" name="alumno" value="<?php echo $arreglo['id_alumno']; ?>" />
						<input type="hidden" name="anio" value="<?php echo $arreglo['anio']; ?>" />
						<input type="hidden" name="seccion" value="<?php echo $arreglo['id_seccion']; ?>" />
					  <input name="submit" type="image" src="../images/certificado.png" title="Buscar por carn&eacute;..."  />
				  </form>				</td>
			</tr>
			<?php
			}
			?>
		</table>
  </div>
	
</div>
    
</body>
</html>
<script language="JavaScript" type="text/javascript">
document.formulario.encargado.focus();
</script>


<script language="JavaScript" type="text/javascript">
function alerta(){
return window.confirm("Seguro que desea Realizar la Accion...?");}
</script>
