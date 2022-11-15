<?php
$host ="localhost";
$user= "root";
$password="";
$db="gastos_semanales";

$conexion = new mysqli($host, $user, $password, $db);

 if($conexion->connect_errno){
  echo "fallo la coneccion a la base de datos". $conexion->connect_error;
}
?>