<?php
include 'conexion.php';
$id = (int)$_GET['id'];
$conn->query("DELETE FROM clientes WHERE id_cliente=$id");
$conn->close();
header('Location: index.php');
exit;
?>