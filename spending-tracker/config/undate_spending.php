<?php
require_once('config.php');
$cantidad = $_POST['cantidad'];
$categoria = $_POST['categoría'];
$descripción = $_POST['descripción'];
$id = $_POST['id'];

$query= "UPDATE dinero set cantidad ='$cantidad', categoría = '$categoria', descripción = '$descripción' WHERE id = '$id' ";

$conexion->query($query);
header("Location:../gastos../index.php");
?>