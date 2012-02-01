<?php
require_once('../conexion.php');

$grado = $_REQUEST['grado'];
$seccion = $_REQUEST['seccion'];
$anio = $_REQUEST['anio'];

?>

<div id="content" class="float-holder">
	<div id="content2">
	    <?php include('../menu.php'); ?>
		<? encabezado('Ingreso de Catedr&aacute;ticos'); ?>
		<div class="title">Ingreso de c&oacute;digo de alumno</div>
	</div>
	
	<div class="blue">
		<form id="form1" name="form1" method="post" action="cod_act.php">
		
		<table width="98%" border="0">
			<tr>
				<td width="58">&nbsp;</td>
				<td width="681" class="Estilo6">
				<?php
				
				$seleccionar = "SELECT *
					FROM grado g, secciones s
					WHERE g.id_grado ='$grado'
						AND s.id_seccion = '$seccion'
						AND g.id_grado = s.id_grado";
				$ejecutar = mysql_query($seleccionar);
				
				if ($arreglo = mysql_fetch_assoc($ejecutar))
				{
					echo 'Nombre del Grado: ' . $arreglo['nombre'] . '<br/> <br/> Secci&oacute;n: '. $arreglo['nombre_seccion'];
				}
				
				?>
				</td>
				<td width="23" align="center"><a href="../index.php"><img src="../images/logo.jpg" width="110" height="117" border="0" title="Ir al inicio..." /></a></td>
			</tr>
		</table>
		
		<table width="98%">
			<?php 
			
			$sql = "SELECT *
				FROM alumno a, grado g, reinscripcion r
				WHERE r.id_alumno = a.id_alumno
					AND g.id_grado = r.id_grado
					AND r.id_grado = '$grado'
					AND r.id_seccion = '$seccion'
					AND r.anio = '$anio'
				ORDER BY a.apellido, a.nombre_alumno ASC ";
			$ejecutar = mysql_query($sql);
			
			$i = 0;
			while ($arreglo = mysql_fetch_assoc($ejecutar))
			{
			
			?>
			<tr>
				<td width="136" class="Estilo11"><?php echo $arreglo['carne']; ?></td>
				<td width="430"><?php echo $arreglo['apellido']; ?><?php echo " , " ?><?php echo $arreglo['nombre_alumno']; ?></td>
				<td width="208" align="right">
				<?php
				
				if ($arreglo['codigo_alumno'])
				{
					echo '<div>' . $arreglo['codigo_alumno'] . '</div>';
				}
				else
				{
					echo '<input name="textfield[' . $arreglo['id_alumno'] . ']" type="text" size="25" value="' . $arreglo['codigo_alumno'] . '" />';
				}
				
				?>
				</td>
			</tr>
			<?php
			
			$i++;
			}
			
			?>
			<tr>
				<td colspan="3" align="center"><input type="submit" name="Submit" value="Guardar Codigos" /></td>
			</tr>
			<tr>
				<td colspan="3">Total de alumnos: <?php echo $i; ?></td>
			</tr>
			<tr>
				<td colspan="3">&nbsp;</td>
			</tr>
		</table>
		</form>
	</div>
</div>

</body>
</html>