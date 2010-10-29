<?php 
require_once('../../conexion.php');

$id_fpagos = $_POST['id_fpagos'];

$pago = $_POST['pago'];
$precio = $_POST['precio'];
$status = $_POST['status'];
$observaciones = $_POST['observaciones'];

$modificar = "UPDATE fpagos SET nombre_fpagos ='$pago' , precio_fpagos = '$precio' , observacion_fpagos = '$observaciones' , status = '$status'  WHERE id_fpagos = '$id_fpagos'";

$ejecutar = mysql_query($modificar);

if($ejecutar)
{
header('location: index.php');
}
else
{
echo "error por que..." .mysql_error();
}
?>