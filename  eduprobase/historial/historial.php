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
                  <td><div align="center" class="title">Historial de Grados </div></td>
                </tr>
                <tr>
                  <td>
                  	<table class="table" width="100%" border="0">
                      <tr>
                        <td width="94" class="gris"><div align="center">A&ntilde;o</div></td>
                        <td width="250" class="gris">Grado</td>
                        <td width="248" class="gris">Encargado</td>
                        <td width="150" class="gris">Informaci&oacute;n</td>
                      </tr>
                  </table></td>
                </tr>
                <tr>
                  <td bgcolor="#F3F3F3"><?php 
				  $carne = $_GET['carne'];
				 // $id_alumno = $_GET['id_alumno'];
				  
		$seleccionar = "SELECT *
			FROM reinscripcion r, alumno a, grado g, secciones s
			WHERE r.id_alumno = a.id_alumno
				AND r.id_grado = g.id_grado
				AND s.id_seccion = r.id_seccion
				AND s.id_grado = r.id_grado
				AND r.carne = '$carne'";
		$ejecutar = mysql_query($seleccionar);

		while($arreglo = mysql_fetch_assoc($ejecutar)){

?>
                      <br />
                      <table width="808" border="0">
                        <tr>
                          <td width="82" class="Estilo6"><div align="center" class="text2"><?php echo $arreglo['anio']; ?></div></td>
                        <td width="294"><div align="center" class="Estilo6">
                              <div align="left"><span class="tex2"><?php echo $arreglo['nombre'] . ', secci&oacute;n: ' . $arreglo['nombre_seccion']; ?>
                              </span></div>
                          </div></td>
                          <td width="255" align="left" class="text2"><div align="left"><?php echo $arreglo['encargado_reinscripcion']; ?></div></td>
                          <td width="50" class="text2"><div align="center"><a href="../reportes/grado.php?id_alumno=<?php echo $arreglo['id_alumno']; ?>&amp;id_grado=<?php echo $arreglo['id_grado']; ?> " target="_blank"><img src="../images/iconos/133.ico" border="0" /></a></div></td>
                        <td width="100" class="text2">
	                          <form action="../reportes/certificaciones.php" method="post">
	                          <input type="hidden" name="alumno" value="<?php echo $arreglo['id_alumno']; ?>" />
	                          <input type="hidden" name="anio" value="<?php echo $arreglo['anio']; ?>" />
	                          <input type="hidden" name="seccion" value="<?php echo $arreglo['id_seccion']; ?>" />
	                          <input type="submit" name="enviar" value="Certificado" />
	                          </form>
													</td>
                        </tr>
                      </table>
                    <?php }?>
                  </td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                </tr>
            </table></td>
    </div></div>
    
</body>
</html>
<script language="JavaScript" type="text/javascript">
document.formulario.encargado.focus();
</script>


<script language="JavaScript" type="text/javascript">
function alerta(){
return window.confirm("Seguro que desea Realizar la Accion...?");}
</script>
