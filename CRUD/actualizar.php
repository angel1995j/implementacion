<?php
include 'conexion.php';
$id       = (int)$_GET['id'];
$nombre   = $_GET['nombre'];
$telefono = $_GET['telefono'];
$conn->query("UPDATE clientes SET nombre='$nombre', telefono='$telefono' WHERE id_cliente=$id");
$conn->close();
header('Location: index.php');
exit;
?>