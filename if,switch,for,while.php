<?php
// ==================================
// Ejemplos de estructuras en PHP
// ==================================

// 1. Ejemplo de FOR
echo "<h3>1) Ejemplo de FOR</h3>";
for ($i = 1; $i <= 5; $i++) {
    echo "Número: $i <br>";
}

// 2. Ejemplo de WHILE
echo "<h3>2) Ejemplo de WHILE</h3>";
$contador = 1;
while ($contador <= 5) {
    echo "Contador en: $contador <br>";
    $contador++;
}

// 3. Ejemplo de SWITCH
echo "<h3>3) Ejemplo de SWITCH</h3>";
$dia = 3; // Cambia el número para probar
switch ($dia) {
    case 1:
        echo "Hoy es Lunes <br>";
        break;
    case 2:
        echo "Hoy es Martes <br>";
        break;
    case 3:
        echo "Hoy es Miércoles <br>";
        break;
    case 4:
        echo "Hoy es Jueves <br>";
        break;
    case 5:
        echo "Hoy es Viernes <br>";
        break;
    default:
        echo "Es fin de semana <br>";
}

// 4. Ejemplo de IF con ELSE IF
echo "<h3>4) Ejemplo de IF con ELSE IF</h3>";
$calificacion = 85; // Cambia el valor para probar
if ($calificacion >= 90) {
    echo "Excelente, sacaste una A <br>";
} elseif ($calificacion >= 80) {
    echo "Muy bien, sacaste una B <br>";
} elseif ($calificacion >= 70) {
    echo "Bien, sacaste una C <br>";
} else {
    echo "Necesitas estudiar más <br>";
}
?>
