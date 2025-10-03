// ==========================================
// EJEMPLOS PRÁCTICOS COMBINADOS
// ==========================================

echo "=== EJEMPLO PRÁCTICO: SISTEMA DE PRODUCTOS ===\n";

// Array de productos
$productos = [
    [
        "id" => 1,
        "nombre" => "Laptop",
        "precio" => 899.99,
        "stock" => 15,
        "activo" => true
    ],
    [
        "id" => 2,
        "nombre" => "Mouse",
        "precio" => 25.50,
        "stock" => 0,
        "activo" => false
    ],
    [
        "id" => 3,
        "nombre" => "Teclado",
        "precio" => 45.75,
        "stock" => 30,
        "activo" => true
    ]
];

// Mostrar información de productos
foreach ($productos as $producto) {
    echo "Producto ID: " . $producto["id"] . "\n";
    echo "  Nombre: " . $producto["nombre"] . "\n";
    echo "  Precio: $" . $producto["precio"] . "\n";
    echo "  Stock: " . $producto["stock"] . "\n";
    echo "  Activo: " . ($producto["activo"] ? "Sí" : "No") . "\n";
    echo "  --------------------\n";
}