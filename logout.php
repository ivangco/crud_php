<?php
require 'conexion.php';
require 'sesiones.php';
session_start();
 $_SESSION['usuario'];
session_destroy();
echo "<script>alert('no tiene acceso'); location.href= 'index.php'</script>";
?>