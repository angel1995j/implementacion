<?php
// Incluir conexión
include('conexion.php');

// Consulta
$resultado = $conn->query("SELECT * FROM productos");

// Encabezado simple
echo "<h2>Lista de productos</h2>";

// Recorrer resultados directamente
while ($fila = $resultado->fetch_assoc()) {
    echo "<div style='border:1px solid #ccc; padding:10px; margin:8px; border-radius:8px;'>";
    echo "<strong>ID:</strong> " . $fila['id_producto'] . "<br>";
    echo "<strong>Nombre:</strong> " . htmlspecialchars($fila['nombre']) . "<br>";
    echo "<strong>Precio:</strong> $" . number_format($fila['precio'], 2) . "<br>";
    echo "<strong>Cantidad:</strong> " . $fila['cantidad'] . "<br>";
    echo "<strong>Categoría:</strong> " . htmlspecialchars($fila['categoria']);
    echo "</div>";
}

$conn->close();
?>
