<?php
include 'conexion.php';
$nombre   = $_GET['nombre'];
$telefono = $_GET['telefono'];
$conn->query("INSERT INTO clientes (nombre, telefono) VALUES ('$nombre', '$telefono')");
$conn->close();
header('Location: index.php');
exit;
?>