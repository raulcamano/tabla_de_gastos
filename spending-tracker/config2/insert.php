<?php
require_once('../config/config.php');
$nombre = $_POST['nombre'];


$query= "INSERT INTO gastos_categorias(nombre) VALUES ('$nombre')";

$conexion->query($query);

header("Location:../gastos_categorias/index.php");
?>