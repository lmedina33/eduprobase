<?php 
require_once('../../conexion.php');

$id_fpagos = $_GET['id_fpagos'];

$borrar = "DELETE FROM fpagos WHERE id_fpagos = '$id_fpagos'";
$ejecutar = mysql_query($borrar);

if($ejecutar){
header('location: index.php');
}
else
{
echo "error por que..." .mysql_error();
}
?>