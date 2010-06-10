<?php

if (!isset($toproot))
{
	$toproot = '../';
}

?>

<div id="tmenu">
    <ul id="menu" class="float-holder">
		<li><a href="<?php echo $toproot; ?>pagos/index.php" title="Pago de Colegiatura de Alumnos">Pagos de Colegiaturas</a></li>
		<li><a href="<?php echo $toproot; ?>#" title="Consulta de Pagos por Alumno">Consulta de pagos</a></li>
		<li><a onclick="return buscar('<?php echo $toproot; ?>aux_search/search.php'); " href="#">B&uacute;squeda de alumno</a></li>
		<li><a href="<?php echo $toproot; ?>pagos/fpagos/index.php" title="Mantenimiento de Pagos">Mantenimientos de Pagos</a></li>

		
	</ul>
</div>

<script type="text/javascript">
function buscar(url) {  
ventana = open(url,"ventana","scrollbars=yes,status=no,toolbar=no,directories=no,menubar=no,resizable=yes,width=350,height=425");
return false;
}
</script>