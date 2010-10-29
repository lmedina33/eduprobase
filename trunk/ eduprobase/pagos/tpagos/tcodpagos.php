<?php 
require_once('../../conexion.php');

$carne = $_POST['carnet'];
$id_alumno = $_POST['id_alumno'];
$pago = $_POST['pago'];
$anio_fpago = date('Y');


$insertar = "INSERT INTO tpagos(id_alumno, carne, id_fpagos, fecha_tpagos, anio_fpagos) VALUES('$id_alumno' , '$carne' , '$pago' , NOW(), '$anio_fpago')";
$ejecutar = mysql_query($insertar);

if($ejecutar){
header('location: tpagos.php');
}
else
{
echo "error al grabar el archivo por que..." .mysql_error();
}
?>