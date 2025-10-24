<?php
require 'conexion.php'; // Tu archivo de conexión

$id = $_GET['id_cliente']; // Ejemplo: archivo.php?id_cliente=3

$resultado = $conexion->query("SELECT nombre FROM clientes WHERE id_cliente = $id");
$fila = $resultado->fetch_assoc();
$nombre_cliente = $fila['nombre'];

echo "El nombre del cliente es: $nombre_cliente";

$conexion->close();
?>
