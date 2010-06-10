<?php 
require_once('../../conexion.php');

$pago = $_POST['pago'];
$precio = $_POST['precio'];
$status = $_POST['status'];
$observaciones = $_POST['observaciones'];
$grado = $_POST['grado'];

$insertar = "INSERT INTO fpagos(id_grado, nombre_fpagos, precio_fpagos, observacion_fpagos, status) VALUES ('$grado' , '$pago' , '$precio' , '$observaciones' , '$status')";
$ejecutar = mysql_query($insertar);

if($ejecutar){
	header('location: ingrepagos.php');
} else {
echo 'error al guardar el archivo por que...' .mysql_error();
}
?>