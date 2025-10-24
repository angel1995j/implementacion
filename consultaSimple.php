<?php
require 'conexion.php'; // Archivo con la conexión

$resultado = $conn->query("SELECT nombre FROM clientes WHERE id_cliente = 1");
$fila = $resultado->fetch_assoc();
$nombre_cliente = $fila['nombre'];

echo "El nombre del cliente es: $nombre_cliente";

$conn->close();
?>
