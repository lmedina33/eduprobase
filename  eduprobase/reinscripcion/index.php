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
	<?php encabezado('Re-Inscripcion'); ?>
	<div class="title">Ingreso de Re-Inscripci&oacute;n</div>
</div>
	
	<form action="reinscripcion.php" method="get" name="formulario" id="formulario" onsubmit="MM_validateForm('carne','','R');return document.MM_returnValue">
	
			<table width="520" border="0" align="center">
				<tr>
					<td align="right">Carn&eacute;: <input name="carne" type="text" id="carne" aurotomplete="off" size="20" /></td>
					<td><input name="submit" type="image" src="../images/arrow_right.png" width="75" height="75" title="Buscar Alumno por Carne" /></td>
				</tr>
			</table>
			
			<br />
			
			<div align="center"><img src="../images/search.png" onclick="return buscar('../aux_search/search.php'); " title="Busqueda Rapida de Alumnos..." width="90" height="90" border="0" /></div>
		
		<div class="title">Visualizaci&oacute;n de &Uacute;ltimas Re-Inscripciones</div>
		
		
		<table width="100%" class="table">
			<tr>
				<td class="gris" width="10%" align="center">Fecha</td>
				<td class="gris" width="10%">Carn&eacute;</td>
				<td class="gris" width="35%" align="left">Nombres y Apellidos</td>
				<td class="gris" width="40%" align="center">Grado</td>
			</tr>
			<?php

			$anio = date("Y");
			$status = "ReInscrito";

			$seleccionar = "SELECT *
				FROM reinscripcion r, alumno a, grado g, secciones s
				WHERE r.id_alumno = a.id_alumno
				AND r.id_grado = g.id_grado
				AND s.id_seccion = r.id_seccion 
				AND anio = '$anio' ORDER BY r.fecha_reinscripcion ASC ";
			$ejecutar = mysql_query($seleccionar);

			while ($arreglo = mysql_fetch_assoc($ejecutar))
			{
			
			?>
			<tr>
				<td width="10%" align="center">
				<?php if($arreglo['sexo']==F) { ?>
				<span id="rosa"><?php echo $arreglo['fecha_reinscripcion']; ?></span>
				<?php }else{ ?>
				<span id="azul"><?php echo $arreglo['fecha_reinscripcion']; ?></span>	
				<?php } ?></td>
				<td width="10%">
				<?php if($arreglo['sexo']=='F') { ?>
				<span id="rosa"><?php echo $arreglo['carne']; ?></span>
				<?php }else{ ?>
				<span id="azul"><?php echo $arreglo['carne']; ?></span>
				<?php } ?></td>
				<td width="35%">
					<img src="../images/iconos/59.ico" /> 
					<?php if($arreglo['sexo']==F){ ?>
					<span id="rosa"><?php echo $arreglo['nombre_alumno']; ?><?php echo " , " ?><?php echo $arreglo['apellido']; ?></span>
					<?php }else{ ?>
					<span id="azul"><?php echo $arreglo['nombre_alumno']; ?><?php echo " , " ?><?php echo $arreglo['apellido']; ?></span>	
					<?php } ?></td>
				<td width="40%">
					<img src="../images/iconos/msn.ico" /> 
					<?php if($arreglo['sexo']==F){ ?>
					<span id="rosa"><?php echo $arreglo['nombre'] .' Secci&oacute;n '. $arreglo['nombre_seccion']; ?></span>
					<?php }else{ ?>
					<span id="azul"><?php echo $arreglo['nombre'] .' Secci&oacute;n '. $arreglo['nombre_seccion']; ?></span>
					<? } ?>	</td>
			</tr>
			<?php

			}

			?>
		</table>
	
	</form>
</div>

<script type="text/javascript">
document.formulario.carne.focus();

function alerta() {
	return window.confirm("Seguro que desea Realizar la Accion...?");
}

function buscar(url) {
	ventana = open(url,"ventana","scrollbars=yes,status=no,toolbar=no,directories=no,menubar=no,resizable=yes,width=350,height=425");
}  
</script>

</body>
</html>
