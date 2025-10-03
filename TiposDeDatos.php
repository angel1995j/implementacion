<?php
// ==========================================
// TIPOS DE DATOS ESCALARES (BÁSICOS)
// ==========================================

// 1. STRING (Cadena de texto)
$nombre = "Juan Pérez";
$mensaje = 'Hola Mundo';
$direccion = "Calle Principal #123";

echo "=== STRINGS ===\n";
echo "Nombre: " . $nombre . "\n";
echo "Mensaje: " . $mensaje . "\n";
echo "Dirección: " . $direccion . "\n";
echo "Tipo de dato: " . gettype($nombre) . "\n\n";

// 2. INTEGER (Número entero)
$edad = 25;
$temperatura = -10;
$poblacion = 5000000;

echo "=== INTEGERS ===\n";
echo "Edad: " . $edad . "\n";
echo "Temperatura: " . $temperatura . "\n";
echo "Población: " . $poblacion . "\n";
echo "Tipo de dato: " . gettype($edad) . "\n\n";

// 3. FLOAT/DOUBLE (Número decimal)
$precio = 19.99;
$pi = 3.14159;
$iva = 0.16;

echo "=== FLOATS ===\n";
echo "Precio: $" . $precio . "\n";
echo "PI: " . $pi . "\n";
echo "IVA: " . ($iva * 100) . "%\n";
echo "Tipo de dato: " . gettype($precio) . "\n\n";

// 4. BOOLEAN (Verdadero o Falso)
$esMayorDeEdad = true;
$tieneLicencia = false;
$estaActivo = true;

echo "=== BOOLEANS ===\n";
echo "Es mayor de edad: " . ($esMayorDeEdad ? 'Sí' : 'No') . "\n";
echo "Tiene licencia: " . ($tieneLicencia ? 'Sí' : 'No') . "\n";
echo "Está activo: " . ($estaActivo ? 'Sí' : 'No') . "\n";
echo "Tipo de dato: " . gettype($esMayorDeEdad) . "\n\n";

// ==========================================
// TIPOS DE DATOS COMPUESTOS
// ==========================================

// 5. ARRAY (Arreglo)
$frutas = array("Manzana", "Banana", "Naranja");
$persona = [
    "nombre" => "María",
    "edad" => 30,
    "ciudad" => "Madrid"
];
$numeros = [1, 2, 3, 4, 5];

echo "=== ARRAYS ===\n";
echo "Frutas: " . implode(", ", $frutas) . "\n";
echo "Persona - Nombre: " . $persona["nombre"] . ", Edad: " . $persona["edad"] . "\n";
echo "Números: " . implode(", ", $numeros) . "\n";
echo "Tipo de dato: " . gettype($frutas) . "\n\n";







?>