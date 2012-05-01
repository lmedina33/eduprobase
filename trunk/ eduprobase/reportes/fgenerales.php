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
		
		<div class="title">Cuadros Generales de Calificaciones</div>
	</div>
	
	<div class="blue">
		<form action="fgenerales2.php" method="post" name="formulario" id="formulario" target="_blank">
		
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
					
					echo '<select name="seccion" id="seccion">';
					
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
				<td class="text1 a_right">A&ntilde;o</td>
				<td>
				  <select name="anio">
				  <?php
				  
				  for ($i_year = date('Y'); $i_year >= 2010; $i_year--)
				  {
						echo '<option value="' . $i_year . '">' . $i_year . '</option>';
					}
					
					?>
					</select>
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

</body>
</html>