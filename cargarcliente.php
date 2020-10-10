<?php
include('conexion.php');

$sql="INSERT INTO `clientes`    (   `nombre_cliente`,           `apellido_cliente`,         `documento_cliente`,        `direccion_cliente`,        `telefono_cliente`) 
    VALUES                      ( '$_GET[nombre_cliente]',    '$_GET[apellido_cliente]',  '$_GET[documento_cliente]', '$_GET[direccion_cliente]', '$_GET[telefono_cliente]'   );";
$insertar=mysqli_query($conn,$sql);

if ($insertar) {
    echo "<script>alert('datos agregados'); location.href='listadocliente.php';</script>";
}else {
    echo "<script>alert('datos no agregados' );location.href='listadocliente.php';</script>";
    echo $sql;
}
?>