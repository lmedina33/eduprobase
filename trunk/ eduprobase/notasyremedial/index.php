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
	    <?php include('../menu.php');
		encabezado('Ingreso de Notas'); ?>
		
		<div class="title">Visualizacion de Nota Final (Nota + Remedial) </div>
	</div>
	
	<div class="blue">
	  <form action="notasyremedial.php" method="post" name="formulario" id="formulario">
	    <table width="731" border="0" align="center">
			<tr>
				<td>&nbsp;</td>
				<td class="text1 a_right">Grado:</td>
				<td>
					<?php
					
					$seleccionar = "SELECT *
						FROM grado g, secciones s
						WHERE g.id_grado = s.id_grado";
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
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
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
					//echo '<option value="0">Seleccione</option>';
					
					//por cada registro encontrado en la tabla me genera un <option>
					while ($arreglo = mysql_fetch_array($ejecutar))
					{
						echo '<option value="' . $arreglo['id_curso'] . '" >' . $arreglo['nombre_curso'] . '</option>';
					}
					
					echo '</select>';
					
					?>
				</td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
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
		</table>
		
		<br />
		<div class="a_center">
			<input type="submit" name="Submit2" value="Ir..." />
		</div>
		<br />
		
	  </form>
  </div>
</div>

<script type="text/javascript">
//<![CDATA[

function alerta() {
	return window.confirm("Seguro que desea Realizar la Accion?");
}

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