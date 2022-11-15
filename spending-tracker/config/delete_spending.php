<?php
require_once('config.php');
$id = $_GET['id'];

$query= "DELETE FROM dinero WHERE id = '$id'";

echo $query;
$conexion->query($query);
header("location:../gastos../index.php");
?>