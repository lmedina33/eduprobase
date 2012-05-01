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
		<?php encabezado('Ingreso de &Aacute;reas'); ?>		
		<div class="title">Ingreso de &Aacute;reas</div>
	</div>
	
	<div class="blue">
		
		<form action="cod_area.php" method="post" onsubmit="return validar_area();">
			<table width="100%" border="0">
				<tr>
					<td width="10" class="text1">&nbsp;</td>
					<td width="183" align="right" class="text1">Nombre del &Aacute;rea:</td>
					<td width="438"><input name="area" type="text" id="area" size="60" autocomplete="off"  /></td>
				</tr>
				<tr>
					<td class="text1">&nbsp;</td>
					<td class="text1" align="right">Observaci&oacute;n:</td>
					<td><textarea name="observacion" id="observacion" autocomplete="off"></textarea></td>
				</tr>
				<tr>
					<td colspan="3" align="center"><input type="submit" name="Submit2" value="Guardar" /></td>
				</tr>
			</table>
		</form>
		
		<div class="title">&Aacute;reas Actuales</div>
		
		<div align="center">
		<?php
		
		$seleccionar = "SELECT * FROM areas_cursos";
		$ejecutar = mysql_query($seleccionar);
		
		while($arreglo = mysql_fetch_assoc($ejecutar))
		{
		?>
			<table width="100%" border="0">
				<tr>
					<td width="25%" align="right"><img src="../images/iconos/227.ico" width="16" /></td>
					<td width="75%" align="left"><?php echo $arreglo['nombre_area']; ?></td>
				</tr>
			</table>
		<?php
		}
		?>
		</div>
	</form>
		
	</div>
</div>

</body>
</html>