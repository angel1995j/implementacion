<?php
// Datos de conexión
$servername = "localhost";
$username   = "solobran_crud";
$password   = "B{1riwJ};ABmAsH!";
$database   = "solobran_crud";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $database);

// Verificar conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
} else {
    echo "✅ Conexión exitosa a la base de datos.";
}
?>
