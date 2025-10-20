<?php
include('conexion.php');

// Obtener el nombre desde GET
$nombre = $_GET['nombre'] ?? '';

// Consulta simple
$sql = "SELECT * FROM productos WHERE nombre LIKE '%$nombre%'";
$resultado = $conn->query($sql);

// Mostrar resultados
echo "<h2>Resultados para: $nombre</h2>";

while ($fila = $resultado->fetch_assoc()) {
    echo "<div style='border:1px solid #ccc; padding:10px; margin:8px;'>";
    echo "<b>ID:</b> {$fila['id_producto']}<br>";
    echo "<b>Nombre:</b> {$fila['nombre']}<br>";
    echo "<b>Precio:</b> $ {$fila['precio']}<br>";
    echo "<b>Cantidad:</b> {$fila['cantidad']}<br>";
    echo "<b>Categoría:</b> {$fila['categoria']}<br>";
    echo "</div>";
}

$conn->close();
?>
