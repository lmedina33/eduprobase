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
		<? encabezado('Faltas Academicas'); ?>		
		<div class="title"> Falta Acad&eacute;mica Almacenada </div>
	</div>
<form action="" method="post" name="formulario" id="formulario" onsubmit="return validar();">
	<br /><br />
                <div id="j"><img src="../images/iconos/227.ico" />Falta Acad&eacute;mica Guardada Exitosamente...</div><br /> 
      <br />
      <?php
					
					$seleccionar = "SELECT * FROM alumno a, faltas f WHERE a.id_alumno = f.id_alumno ORDER BY f.id_falta";
					$ejecutar = mysql_query($seleccionar);
					
					while($arreglo = mysql_fetch_assoc($ejecutar))
					{
					
					?>
					<table width="100%">
						<tr>
							<td width="20%" bgcolor="#DCD6D6"><?php echo $arreglo['carne']; ?></td>
							<td width="70%"bgcolor="#DCD6D6"><?php echo $arreglo['apellido']; ?><?php echo " , " ?><?php echo $arreglo['nombre_alumno']; ?></span></td>
							<td width="20%" bgcolor="#FAC8C8"><img src="../images/iconos/48.ico" /> <a href="ver_faltas.php?id_falta=<?php echo $arreglo['id_falta']; ?>">Ver Faltas </a></td>
						</tr>
					</table>
					<?php
					
					}
					?>
    </form>
</body>
</html>
<script language="JavaScript" type="text/javascript">
document.formulario.encargado.focus();
</script>
<script type="text/JavaScript">
<!--
function validar(){
if(!confirm("Seguro que Desea Guardar Falta Acad�mica")){
return false;
}
}


//-->
</script>

<script language="JavaScript" type="text/javascript">
function alerta(){
return window.confirm("�Seguro que desea Realizar la Acci�n...?");}
</script>
