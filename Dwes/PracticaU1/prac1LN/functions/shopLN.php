<?php
/**
 * shopLN.php
 * Datos y funciones de la tienda (Ejercicios 4 y 4.1)
 */

$productos = [
    'prod1' => [
        'nombre' => 'portátil gaming',
        'precio' => 899.99,
        'stock' => 15,
        'categoria' => 'electrónica'
    ],
    'prod2' => [
        'nombre' => 'mesa escritorio',
        'precio' => 120.50,
        'stock' => 8,
        'categoria' => 'hogar'
    ],
    'prod3' => [
        'nombre' => 'ratón inalámbrico',
        'precio' => 25.99,
        'stock' => 0,
        'categoria' => 'electrónica'
    ]
];

// Ejercicio 4.1: igual que el anterior, pero solo algunos productos
// tienen la clave 'descuento' (porcentaje).
$productosConDescuento = [
    'prod1' => [
        'nombre' => 'portátil gaming',
        'precio' => 899.99,
        'stock' => 15,
        'categoria' => 'electrónica',
        'descuento' => 15
    ],
    'prod2' => [
        'nombre' => 'mesa escritorio',
        'precio' => 120.50,
        'stock' => 8,
        'categoria' => 'hogar'
    ],
    'prod3' => [
        'nombre' => 'ratón inalámbrico',
        'precio' => 25.99,
        'stock' => 0,
        'categoria' => 'electrónica',
        'descuento' => 30
    ]
];

/**
 * Devuelve el precio con formato español: 899.99 -> "899,99 €"
 */
function formatPrice($precio)
{
    return number_format($precio, 2, ',', '.') . " €";
}

/**
 * Devuelve el precio con IVA incluido (21% por defecto).
 */
function calculateIVA($precio, $iva = 21)
{
    return round($precio * (1 + $iva / 100), 2);
}

/**
 * Devuelve el precio una vez aplicado un descuento (en porcentaje).
 * Función extra para el ejercicio 4.1.
 */
function calculateDiscount($precio, $descuento)
{
    return round($precio * (1 - $descuento / 100), 2);
}

/**
 * Devuelve un array solo con los productos que tienen stock > 0.
 */
function getStock($productos)
{
    $disponibles = [];

    foreach ($productos as $clave => $producto) {
        if ($producto['stock'] > 0) {
            $disponibles[$clave] = $producto;
        }
    }

    return $disponibles;
}
