<?php

require_once('../conexion.php');

$carne = $_GET['carne'];
$subcarne = substr($carne, 5);

$seleccionar = "SELECT * FROM alumno a, grado g, reinscripcion r WHERE 
				g.id_grado = r.id_grado AND
				r.id_alumno = a.id_alumno AND 
				a.id_alumno = '$subcarne'";
$ejecutar = mysql_query($seleccionar);

if (!$arreglo1 = mysql_fetch_assoc($ejecutar))
{
	header("location: index.php");
} 

?>
			<div id="content" class="float-holder">
					<div id="cuadro">
			<div id="ini"><a href="../index.php"><img src="../images/inicio.jpg" /></a></div>
			<div id="men"><img src="../images/menu.jpg" /></div>
			<div id="exit"><a href="../exit.php"><img src="../images/exit.jpg" /></a></div>
		</div><!-- fin del cuadro-->
				<div class="content2">
					
				<?php include('../menu.php'); ?>
				<?php encabezado('Datos de Re-Inscripcion'); ?>
				<div class="title"> Ingreso de Re-Inscripci&oacute;n </div>
				
				</div>
				
<form action="cod_reinscripcion.php" method="post" name="formulario" id="formulario" onsubmit="return validar();">
	
	<table width="100%">
		<tr>
			<td class="centrar" width="50%"> Generales Alumno</td>
			<td class="centrar" width="50%">Datos Inscrici&oacute;n <? echo date('Y');?></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td id="pad" width="50%"><span class="verde">Carn&eacute;:</span> <span class="rojo"> <?php echo $arreglo1['carne']; ?></span></td>
			<td width="50%" class="derecha"><span class="verde">Encargado <? echo date('Y');?>:</span><input name="encargado" type="text" id="encargado" aurotomplete="off" size="40"  autocomplete="off" /></td>
		</tr>
		<tr>
			<td id="pad"><span class="verde">Nombre:</span> <span class="titulogris">  <?php echo $arreglo1['nombre_alumno']; ?></span></td>
			<td class="derecha"><span class="verde" >Tel&eacute;fonos:</span> <span class="titulogris"><input name="telefonos" type="text" id="telefonos" aurotomplete="off" size="40"  autocomplete="off" /></span></td>
		</tr>
		<tr>
			<td id="pad" ><span class="verde">Apellido:</span> <span class="titulogris">  <?php echo $arreglo1['apellido']; ?></span></td>
			<td></td>
		</tr>
		<tr>
			<td></td>
			<td  class="derecha"><span class="verde">Grado</span> <span class="titulogris"><select id="grado" name="grado">
					<?php
					/*
					$sql = "SELECT id_grado
						FROM reinscripcion
						WHERE carne = '" . $carne . "'
						ORDER BY id_grado DESC
						LIMIT 1";
					$u_grado = mysql_query($sql);
					
					$last_grade = 0;
					if ($u_result = mysql_fetch_array($u_grado))
					{
						$last_grade = $u_result['id_grado'];
					}
					
					$seleccionar = "SELECT *
						FROM grado
						WHERE status = 'Alta' 
						AND correlativo > " . $last_grade;
					$ejecutar = mysql_query($seleccionar);*/
					
					$seleccionar = "SELECT *
						FROM grado
						WHERE status = 'Alta' ORDER BY correlativo ASC";
					$ejecutar = mysql_query($seleccionar);
					
					$primer_seccion = 0;
					while ($arreglo = mysql_fetch_array($ejecutar))
					{
						if (!$primer_seccion)
						{
							$primer_seccion = $arreglo['id_grado'];
						}
						
						echo '<option value="' . $arreglo['id_grado'] . '" >' . $arreglo['nombre'] . '</option>';
					}
					
					?>
					</select>
					
					<span class="verde">Secci&oacute;n:</span> <span class="titulogris"><select id="seccion" name="seccion">
						<?php
						
						$seleccionar = "SELECT * FROM secciones WHERE id_grado = " . $primer_seccion;
						$ejecutar = mysql_query($seleccionar);
						
						//echo '<option value="0">Seleccione </option>';
						//por cada registro encontrado en la tabla me genera un <option>
						while ($arreglo = mysql_fetch_array($ejecutar))
						{
							echo '<option value="' . $arreglo['id_seccion'] . '" >' . $arreglo['nombre_seccion'] . '</option>';
						}
						
						?>
					</select>
					</td>
		</tr>
		<tr>
			<td id="pad"><span class="verde">Padre:</span> <span class="titulogris">  <?php echo $arreglo1['padre']; ?></span></td>
			<td></td>
		</tr>
		<tr>
			<td id="pad"><span class="verde">Madre:</span> <span class="titulogris">  <?php echo $arreglo1['madre']; ?></span></td>
			<td class="centrar"><input name="submit" type="submit" value="Guardar Re-Inscripcion" src="../images/save.png" /></td>
		</tr>
				<tr>
			<td></td>
			<td></td>
		</tr>
	</table>
	
	<input name="id_alumno" type="hidden" id="id_alumno" value="<?php echo $arreglo1['id_alumno']; ?>" />
	<input name="nombre" type="hidden" id="nombre" value="<?php echo $arreglo1['nombre_alumno']; ?>" />
	<input name="apellido" type="hidden" id="apellido" value="<?php echo $arreglo1['apellido']; ?>"/>
	<input name="madre" type="hidden" id="madre" value="<?php echo $arreglo1['madre']; ?>"/>
	<input name="padre" type="hidden" id="padre" value="<?php echo $arreglo1['padre']; ?>" />
    <input name="carnet" type="hidden" id="carnet" value="<?php echo $arreglo1['carne']; ?>" />
    <input name="observacion" type="hidden" id="carnet" value="<?php echo $arreglo1['observacion']; ?>" />
    
                    
                  <table width="100%">
                      <tr>
                        <td width="100%" bgcolor="#999999"><div align="center" class="title">Historial de Grados </div></td>
                      </tr>
                      <tr>
                        <td>
                        	<table width="100%" border="0" class="table">
                            <tr>
                              <td width="10%" class="gris"><div align="center">A&ntilde;o</div></td>
                              <td width="30%" class="gris"><div align="center">Grado</div></td>
                              <td width="40%" class="gris"><div align="center">Encargado</div></td>
                              <td width="20%" class="gris"><div align="center">Fech. Inscrip. </div></td>
                            </tr>
                        </table></td>
                      </tr>
                      <tr>
                        <td>
                            <?php 
				  $carne = $_GET['carne'];
		$seleccionar = "SELECT *
			FROM reinscripcion r, alumno a, grado g, secciones s
			WHERE r.id_alumno = a.id_alumno
				AND r.id_grado = g.id_grado
				AND r.carne = '$carne'
				AND s.id_seccion = r.id_seccion
				AND s.id_grado = g.id_grado";
		$ejecutar = mysql_query($seleccionar);

		while($arreglo = mysql_fetch_assoc($ejecutar)){

?>
                            <br />
                            <table width="808" border="0" class="table">
                              <tr>
                                <td width="94" class="Estilo6"><div align="center" class="text2"><?php echo $arreglo['anio']; ?></div></td>
                                <td width="342"><div align="center" class="Estilo6">
                                    <div align="left"><span class="tex2"><?php echo $arreglo['nombre'] . ' ' . $arreglo['nombre_seccion']; ?></span></div>
                                </div></td>
                                <td width="252" align="left" class="text2"><div align="left"><?php echo $arreglo['encargado_reinscripcion']; ?></div></td>
                                <td width="102"><?php echo $arreglo['fecha_reinscripcion']; ?></td>
                              </tr>
                            </table>
                          <?php }?>
                            <br />
                            <br /></td>
                      </tr>
                  </table></td>
              </tr>
            </table>
        </form>
       </div>

<script language="JavaScript" type="text/javascript">
<!--
function validar(){
if(!confirm("Seguro que Desea Re-Inscribir al Alumno?")){
return false;
}
MM_validateForm('encargado','','R','telefonos','','R');return document.MM_returnValue;
}
//-->
document.formulario.encargado.focus();

//<![CDATA[
function alerta(){
return window.confirm("Seguro que desea Realizar la Accion...?");}

$(function() {
	$('#grado').change(function() {
		$.ajax({
			type: "POST",
			url: "../actseccion.php",
			data: "grado=" + this.value,
			success: function(msg) {
				$('#seccion').html(msg);
			}
 });
	});
});

</script>
</body>
</html>