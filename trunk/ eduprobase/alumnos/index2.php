<?php
require_once('../conexion.php');
?>

<div id="content" class="float-holder">
	<div id="content2">
		<?php include('../menu.php'); ?>
		<?php encabezado('Confirmaci&oacute;n de Alumno'); ?>		
		<div class="title">Alumno Ingresado con �xito</div>
		
		<table width="100%" border="0">
			<tr>
				<td width="276">&nbsp;</td>
				<td width="125">&nbsp;</td>
				<td width="109">&nbsp;</td>
				<td width="145"><div align="center"><img src="../images/iconos/multisend.ico" /> <a href="index.php" class="text2">Nueva Inscripci&oacute;n</a> </div></td>
				<td width="131"><div align="center"><img src="../images/iconos/yahoo.ico" /> <a href="../reinscripcion/index.php">Re-Inscripci&oacute;n</a></div></td>
			</tr>
		</table>
		
		<div class="title">Visualizaci&oacute;n de alumnos nuevos</div>
		
		<div class="blue" style="width: 100%; height: 250px; overflow: auto;">
			<table width="100%" border="0" class="table" >
				<tr>
					<td class="gris" width="10%" align="center">Carn&eacute;</td>
					<td class="gris" width="10%" align="center">Fecha</td>
					<td class="gris" width="40%" align="center">Nombres</td>
					<td class="gris" width="10%" align="center">Compromiso de Estudios</td>
					<td class="gris" width="20%" align="center">Grado</td>
					<td class="gris" width="10%" align="center">Editar</td>
				</tr>
			<?php

			$seleccionar = 'SELECT *
				FROM alumno a, reinscripcion r, grado g, secciones s
				WHERE a.id_alumno = r.id_alumno
					AND r.id_grado = g.id_grado
					AND r.id_seccion = s.id_seccion
					AND r.anio = ' . date('Y') . '
				ORDER BY a.id_alumno DESC' ;
			$ejecutar = mysql_query($seleccionar);

			while($arreglo = mysql_fetch_assoc($ejecutar))
			{
			?>
				<tr>
					<td><?php echo $arreglo['carne']; ?></td>
					<td align="center"><?php echo $arreglo['fecha']; ?></td>
					<td><?php echo $arreglo['apellido'] . ', ' . $arreglo['nombre_alumno']; ?></td>
					<td align="center"><a href="../reportes/compromiso.php?id_alumno=<?php echo $arreglo['id_alumno']; ?>" target="_blank"><img src="../images/iconos/39.ico" width="20" border="0" /></a> <a href="../reportes/compromiso2.php?id_alumno=<?php echo $arreglo['id_alumno']; ?>" target="_blank"><img src="../images/iconos/39.ico" width="20" border="0" /></a></td>
					<td><?php echo $arreglo['nombre'] . ' ' . $arreglo['nombre_seccion']; ?></td>
					<td align="center"><a href="../mantenimientos/alumnos/alumno.php?carne=<?php echo $arreglo['carne']; ?>&amp;Submit2=Buscar" target="_blank"><img src="../images/iconos/226.ico" width="20" border="0" /></a></td>
				</tr>
			<?php
			}
			?>
			</table>
		</div>
	</div>
</div>

</body>
</html>