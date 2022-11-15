<?php
require_once('config.php');
$cantidad = $_POST['cantidad'];
$categoria = $_POST['categoría'];
$descripción = $_POST['descripción'];

$query= "INSERT INTO dinero(cantidad, Categoría, descripción) VALUES ('$cantidad','$categoria', '$descripción')";

$conexion->query($query);

header("Location:../gastos../index.php");
?>