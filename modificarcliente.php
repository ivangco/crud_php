<?php
include('conexion.php');

$sql="UPDATE `clientes` 
SET 
`nombre_cliente` = '$_GET[nombre_cliente]', 
`apellido_cliente` = '$_GET[apellido_cliente]', 
`documento_cliente` = '$_GET[documento_cliente]', 
`direccion_cliente` = '$_GET[direccion_cliente]', 
`telefono_cliente` = '$_GET[telefono_cliente]' 
WHERE `clientes`.`id_cliente` = $_GET[cod]";
$insertar=mysqli_query($conn,$sql);

if ($insertar) {
    echo "<script>alert('datos modificados'); location.href='listadocliente.php';</script>";
}else {
    echo "<script>alert('datos no modificados' );location.href='listadocliente.php'=;</script>";
    echo $sql;
}