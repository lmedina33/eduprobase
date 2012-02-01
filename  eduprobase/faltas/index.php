<?php
require_once('../conexion.php');
?>

<div id="content" class="float-holder">
	<div id="content2">
		<?php include('../menu.php'); ?>
		<? encabezado('Faltas Academicas'); ?>		
		<div class="title">Faltas acad&eacute;micas</div>
	</div>
	
	<form action="faltas.php" method="get" name="formulario" id="formulario" onsubmit="MM_validateForm('carne','','R');return document.MM_returnValue">
	  <div class="a_center">Ingresar Falta: 
		    <input name="carne" type="text" id="carne" aurotomplete="off" size="20"  autocomplete="off" />&nbsp;&nbsp;
		    <a href="#"><img src="../images/iconos/250.ico" border="0" title="Busqueda Rapida..." onclick="return buscar('../aux_search/search.php')" /></a>
		    <br />
	  </div>
		
		<br />
		<div class="a_center">
		    <img src="../images/iconos/289.ico" class="text1" /> <a href="#">Ver faltas acad&eacute;micas de alumno</a>
		</div>
		<br />
		
	</form>
</div>

<script type="text/javascript">
document.formulario.carne.focus();

function buscar(url) {
	ventana = open(url,"ventana","scrollbars=yes,status=no,toolbar=no,directories=no,menubar=no,resizable=yes,width=350,height=425")  
}
</script>

</body>
</html>