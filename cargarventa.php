<?php
include 'conexion.php';
if (!empty($_POST['agregar'])) {

    $consulta = mysqli_query($conn, " SELECT * FROM venta where estado_venta='PENDIENTE'");
    $precio=str_replace('.','',$_POST['precio2']);
    
    if (mysqli_num_rows($consulta) <= 0) {
        $insertarcabezera = mysqli_query($conn, " INSERT INTO venta ( id_cliente, fecha_venta, total_venta, estado_venta)
                                                VALUES ('$_POST[id_cliente]',now(),0,'PENDIENTE');");

        if ($insertarcabezera) {
            $consulta2 = mysqli_query($conn, " SELECT * FROM venta where estado_venta='PENDIENTE'");
            $row = mysqli_fetch_array($consulta2);
            $insertardetalle = mysqli_query($conn, "INSERT INTO ventadetalle (id_venta, precio_venta, id_producto, cantidad_venta)
             VALUES ('$row[id_venta]','$_POST[precio2]','$_POST[codproducto]','$_POST[cantidad]');");
            if ($insertardetalle) {
                echo "<script>location.href='FacturarVentas.php';</script>";
            }
        }

    } else {
        $consulta3 = mysqli_query($conn, " SELECT * FROM venta where estado_venta='PENDIENTE'");
        $rows = mysqli_fetch_array($consulta3);
        $insertardetalle = mysqli_query($conn, "INSERT INTO ventadetalle (id_venta, precio_venta, id_producto, cantidad_venta)
        VALUES ('$rows[id_venta]','$precio','$_POST[codproducto]','$_POST[cantidad]');");
        if ($insertardetalle) {
            echo "<script>location.href='FacturarVentas.php';</script>";
        }

    }

} else {
    echo "<script>location.href='FacturarVentas.php';</script>";
}
