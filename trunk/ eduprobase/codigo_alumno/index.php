<?php

require_once('../conexion.php');

encabezado('Ingreso de Catedr&aacute;ticos');

?>

<div id="content" class="float-holder">
	<div id="content2">
	    <?php include('../menu.php'); ?>
		
		<div class="title">Ingreso de c&oacute;digos de alumnos</div>
	</div>
	
	<div class="blue">
		<form id="form1" name="form1" method="post" action="codigos.php">
		
		<table width="731" border="0" align="center">
			<tr>
				<td>&nbsp;</td>
				<td class="text1 a_right">Grado:</td>
				<td><select id="grado" name="grado">
				<?php
				
				$sql = "SELECT *
					FROM grado
					WHERE id_grado = 1
						AND status = 'Alta'";
				$ejecutar = mysql_query($sql);
				
				while ($arreglo = mysql_fetch_array($ejecutar))
				{
					echo '<option value="' . $arreglo['id_grado'] . '" >' . $arreglo['nombre'] . '</option>';
				}
				
				?>
				</select></td>
			</tr>
			<tr>
				<td colspan="3">&nbsp;</td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td class="text1 a_right">Secci&oacute;n:</td>
				<td><select id="seccion" name="seccion">
				<?php
				
				$sql = "SELECT *
					FROM secciones
					WHERE id_grado = 1";
				$ejecutar = mysql_query($sql);
				
				while ($arreglo = mysql_fetch_array($ejecutar))
				{
					echo '<option value="' . $arreglo['id_seccion'] . '" >' . $arreglo['nombre_seccion'] . '</option>';
				}
				
				?>
				</select></td>
			</tr>
			<tr>
				<td colspan="3">&nbsp;</td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td class="text1 a_right">A&ntilde;o:</td>
				<td><select name="anio" id="anio">
				<?php
				
				for ($i_year = date('Y'); $i_year >= 2010; $i_year--)
				{
					echo '<option value="' . $i_year . '">' . $i_year . '</option>';
				}
				
				?>
				</select></td>
			</tr>
			<tr>
				<td colspan="3">&nbsp;</td>
			</tr>
			<tr>
				<td colspan="3" align="center"><input type="submit" name="Submit" value="Ver Listado..." /></td>
			</tr>
		</table>
		</form>
	</div>
	
</div>

<script language="JavaScript" type="text/javascript">
//<![CDATA[
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
//]]>
</script>

</body>
</html>