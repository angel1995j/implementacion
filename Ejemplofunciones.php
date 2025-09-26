<?php
// =============================
// Ejemplos de Funciones en PHP
// =============================

// 1. Función sin parámetros
function saludar() {
    echo "1) ¡Hola, bienvenido a PHP! <br><br>";
}

// 2. Función con un parámetro
function saludarUsuario($nombre) {
    echo "2) Hola, " . $nombre . " ¡Qué gusto verte! <br>";
}

// 3. Función con varios parámetros
function sumar($num1, $num2) {
    $resultado = $num1 + $num2;
    echo "3) La suma de $num1 + $num2 es: $resultado <br>";
}

// 4. Función que devuelve un valor
function multiplicar($a, $b) {
    return $a * $b;
}

// 5. Función con condiciones
function evaluarEdad($edad) {
    if ($edad >= 18) {
        echo "5) Con $edad años: eres mayor de edad.<br>";
    } else {
        echo "5) Con $edad años: eres menor de edad.<br>";
    }
}

// 6. Función con ciclo
function contarHasta($numero) {
    echo "6) Contando hasta $numero: <br>";
    for ($i = 1; $i <= $numero; $i++) {
        echo $i . " ";
    }
    echo "<br><br>";
}

// =============================
// Ejecución de las funciones
// =============================

saludar();

saludarUsuario("Ángel");
saludarUsuario("Leonardo");
echo "<br>";

sumar(5, 3);
sumar(10, 20);
echo "<br>";

$resultadoMultiplicacion = multiplicar(4, 6);
echo "4) El resultado de 4 * 6 es: " . $resultadoMultiplicacion . "<br><br>";

evaluarEdad(15);
evaluarEdad(20);
echo "<br>";

contarHasta(5);
contarHasta(10);
?>
