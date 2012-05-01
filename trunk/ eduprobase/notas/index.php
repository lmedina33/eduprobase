<?php
require_once('../conexion.php');
?>

<div id="content" class="float-holder">
		<div id="cuadro">
			<div id="ini"><a href="../index.php"><img src="../images/inicio.jpg" /></a></div>
			<div id="men"><img src="../images/menu.jpg" /></div>
			<div id="exit"><a href="../exit.php"><img src="../images/exit.jpg" /></a></div>
		</div><!-- fin del cuadro-->
	<div id="content2">
	    <?php include('../menu.php'); ?>
	    <?php encabezado('Ingreso de Notas'); ?>
		
		<div class="title">Ingreso de Notas</div>
	</div>
	
	<div class="blue">
		<form action="notas.php" method="post" name="formulario" id="formulario">
		
		<table width="731" border="0" align="center">
			<tr>
				<td>&nbsp;</td>
				<td class="text1 a_right">Grado:</td>
				<td>
					<?php
					
					$seleccionar = "SELECT *
						FROM grado g, secciones s
						WHERE g.id_grado = s.id_grado AND status = 'Alta'";
					$ejecutar = mysql_query($seleccionar);
					
					echo '<select name="grado" id="grado">';
					//echo '<option value="0">Seleccione </option>';
					
					while ($arreglo = mysql_fetch_array($ejecutar))
					{
						echo '<option value="' . $arreglo['id_seccion'] . '" >' . $arreglo['nombre']. ' - secci&oacute;n: ' .$arreglo['nombre_seccion'] .'</option>';
					}
					
					echo '</select>';
					
					?>
				</td>
			</tr>
			<tr>
				<td colspan="3">&nbsp;</td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td class="text1 a_right">Curso:</td>
				<td>
					<?php
					
					$seleccionar = "SELECT *
						FROM cursos
						WHERE id_grado = 1";
					$ejecutar = mysql_query($seleccionar);
					
					echo '<select name="curso" id="curso">';
					
					while ($arreglo = mysql_fetch_array($ejecutar))
					{
						echo '<option value="' . $arreglo['id_curso'] . '" >' . $arreglo['nombre_curso'] . '</option>';
					}
					
					echo '</select>';
					
					?>
				</td>
			</tr>
			<tr>
				<td colspan="3">&nbsp;</td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td class="text1 a_right">Tiempo de Examen:</td>
				<td>
					<?php
					
					$seleccionar = "SELECT * FROM examenes";
					$ejecutar = mysql_query($seleccionar);
					
					echo '<select name="examen">';
					
					// por cada registro encontrado en la tabla me genera un <option>
					while ($arreglo = mysql_fetch_array($ejecutar))
					{
						echo '<option value="' . $arreglo['id_examen'] . '" >' . $arreglo['examen'] . '</option>';
					}
					
					echo '</select>';
					
					?>
				</td>
			</tr>
			<tr>
				<td colspan="3">&nbsp;</td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td class="text1 a_right">A&ntilde;o:</td>
				<td>
					<?php
					
					$anioa = date('Y');
					$anio = array(2010, 2011,2012);
					
					echo '<select name="anio">';
					
					foreach ($anio as $row)
					{
						echo '<option value="' . $row . '"' . (($row == $anioa) ? 'selected="selected"' : '') . '>' . $row . '</option>';
					}
					
					echo '</select>';
					
					?>
				</td>
			</tr>
			<tr>
				<td colspan="3">&nbsp;</td>
			</tr>
			<tr>
				<td colspan="3" align="center"><input type="submit" name="Submit2" value="Ir..." /></td>
			</tr>
		</table>
		</form>
	</div>
</div>

<script type="text/javascript">
//<![CDATA[
$(function() {
	$('#grado').change(function() {
		$.ajax({
			type: "POST",
			url: "./index2.php",
			data: "grado=" + this.value,
			success: function(msg) {
				$('#curso').html(msg);
			}
 });
	});
});
//]]>
</script>

</body>
</html>