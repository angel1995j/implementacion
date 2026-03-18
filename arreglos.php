<?php
// Array indexado (lista simple)
$frutas = ["Manzana", "Banana", "Naranja", "Fresa"];

echo "<h3>Mi lista de frutas:</h3>";
echo "<ul>";
echo "<li>" . $frutas[0] . "</li>"; // Accedemos por su posición (índice)
echo "<li>" . $frutas[1] . "</li>";
echo "<li>" . $frutas[2] . "</li>";
echo "</ul>";

// Array asociativo (información con etiquetas)
$alumno = [
    "nombre" => "Ana Pérez",
    "edad" => 15,
    "curso" => "PHP Básico",
    "ciudad" => "Madrid"
];

echo "<h3>Datos del Alumno:</h3>";
echo "<p>Nombre: " . $alumno["nombre"] . "</p>";
echo "<p>Edad: " . $alumno["edad"] . " años</p>";
echo "<p>Curso: " . $alumno["curso"] . "</p>";
?>
