<?php
require 'conexion.php'; // Archivo con la conexión

$resultado = $conexion->query("SELECT nombre FROM clientes WHERE id_cliente = 1");
$fila = $resultado->fetch_assoc();
$nombre_cliente = $fila['nombre'];

echo "El nombre del cliente es: $nombre_cliente";

$conexion->close();
?>
