<?php
require_once('config.php');
$email= $_POST['email'];
$Password = $_POST['Password'];

$query= "SELECT * FROM usuarios WHERE correo = '$email' AND Password = '$Password' AND status =1 ";
$result = $conexion->query($query);
if($result->num_rows > 0){
    session_start();
    $_SESSION['user']=$email;
header("location:../index.php");
}else{
    header("location:../login.php");
}

?>