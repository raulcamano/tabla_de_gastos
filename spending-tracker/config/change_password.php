<?php
require_once('config.php');
$id = $_POST['id'];
$Pass = $_POST['new_password'];

$query= "UPDATE usuarios set password='$Pass' WHERE id= $id";
$result = $conexion->query($query);

 header("location:../login.php?message=success_password");

?>