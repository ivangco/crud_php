<?php 

$host="localhost";
$user="root";
$pass="";
$bd="proyectophp";

$conn=mysqli_connect($host, $user, $pass);

mysqli_select_db($conn,$bd);
?>