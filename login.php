<?php
require 'conexion.php';
//require 'navegador.php';

$email = $_POST['email'];
$pass = md5($_POST['pass']);



$consulta = mysqli_query($conn, "SELECT * FROM usuarios WHERE email_usuario='$email' AND password_usuario='$pass';");

if (mysqli_num_rows($consulta) > 0) {
    $roww = mysqli_fetch_array($consulta);

    
    session_start();
    $_SESSION['email'] = $roww['email_usuario'];
    $_SESSION['otro'] = $dato['nombre_usuario'];
    $_SESSION['usuario'] = $dato['id_usuario'];
    //echo "<script>;
    //</script>";
    echo "<script>location.href= 'menu.php'</script>";


}
else{
echo "<script>alert('$pass');location.href= 'index.php'</script>";

}