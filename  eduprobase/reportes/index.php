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
	<?php encabezado('Reportes Generales'); ?>	
	<div class="title">Reportes del Sistema</div>
</div>
<br />
	<ul class="options">
		<li><a href="alumnos/listado_alumno.php"><img src="../images/iconos/59.ico" /> Listado de Alumnos</a></li>
		<li><a href="asistencia/listado_alumno.php"><img src="../images/iconos/152.ico" /> Control Asistencia de Alumnos</a></li>
		<li><a href="promedios/"><img src="../images/iconos/227.ico" /> Promedios de Alumnos</a></li>
		<li><a href="calificaciones.php"><img src="../images/iconos/30.ico" /> Tarjeta de Calificaciones</a></li>
		<li><a href="catedraticos/listado_catedratico.php"><img src="../images/iconos/209.ico" /> Catedr&aacute;ticos con Cursos</a></li>
		<li><a href="certificaciones.php"><img src="../images/iconos/144.ico" /> Certificaciones Anuales</a></li>
		<li><a href="fgenerales.php"><img src="../images/iconos/buddy-signon.ico" /> Cuadros Generales de Calificaciones</a></li>
		<li><a href="carta_editar.php" target="_blank"><img src="../images/iconos/22.ico"/> Carta para Edici&oacute;n de Calificaci&oacute;n </a></li>
	    <li><a href="../notasyremedial/index.php" target="_blank"><img src="../images/iconos/134.ico"/> Cuadros de Notas + Remedial por Curso</li>
	</ul>
	<br /><br />

</div>

<script language="JavaScript" type="text/javascript">
document.formulario.carne.focus();

function buscar(url) {  
ventana = open(url,"ventana","scrollbars=yes,status=no,toolbar=no,directories=no,menubar=no,resizable=yes,width=350,height=425")  
}  
</script>
<script language="JavaScript" type="text/javascript">

function buscar(url) {  
ventana = open(url,"ventana","scrollbars=yes,status=no,toolbar=no,directories=no,menubar=no,resizable=yes,width=350,height=425")  
}  

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

</script>

</body>
</html>