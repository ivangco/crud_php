<?php
include('conexion.php');

$sql="DELETE FROM `clientes` WHERE `clientes`.`id_cliente` = $_GET[cod]";
$borrar=mysqli_query($conn,$sql);

if ($borrar) {
    echo "<script>alert('datos borrados'); location.href='listadocliente.php';</script>";
}else {
    echo "<script>alert('datos no borrados' );location.href='listadocliente.php'=;</script>";
    echo $sql;
}
?>