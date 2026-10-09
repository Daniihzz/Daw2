
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Apuntes PHP: Figuras y patrones</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 30px;
            background: #f5f5f5;
        }

        h1 {
            color: darkblue;
        }

        h3 {
            color: #174a80;
            margin-top: 30px;
        }

        .figura {
            font-family: monospace;
            font-size: 18px;
            line-height: 1.3;
            white-space: nowrap;
            background: white;
            padding: 12px;
            border: 1px solid #ddd;
            display: table;
        }
    </style>
</head>

<body>

<h1>Apuntes PHP: Dibujos y patrones</h1>

<?php

$rows = 7;
$cols = 9;


// ==========================================
// 1. ESCALERA DE ASTERISCOS
// ==========================================

echo "<h3>1. Escalera</h3>";
echo '<div class="figura">';

for ($i = 0; $i < $rows; $i++) {
    for ($j = 0; $j <= $i; $j++) {
        echo "* ";
    }
    echo "<br>";
}

echo "</div>";


// ==========================================
// 2. ESCALERA INVERTIDA
// ==========================================

echo "<h3>2. Escalera invertida</h3>";
echo '<div class="figura">';

for ($i = $rows; $i > 0; $i--) {
    for ($j = 0; $j < $i; $j++) {
        echo "* ";
    }
    echo "<br>";
}

echo "</div>";


// ==========================================
// 3. LETRA X
// ==========================================

echo "<h3>3. Letra X</h3>";
echo '<div class="figura">';

for ($i = 0; $i < $rows; $i++) {
    for ($j = 0; $j < $rows; $j++) {

        if ($i == $j || $i + $j == $rows - 1) {
            echo "* ";
        } else {
            echo "&nbsp;&nbsp;";
        }

    }
    echo "<br>";
}

echo "</div>";


// ==========================================
// 4. LETRA F
// ==========================================

echo "<h3>4. Letra F</h3>";
echo '<div class="figura">';

for ($i = 0; $i < $rows; $i++) {
    for ($j = 0; $j < $cols; $j++) {

        if (
            $j == 0 ||
            $i == 0 ||
            ($i == 3 && $j < 6)
        ) {
            echo "* ";
        } else {
            echo "&nbsp;&nbsp;";
        }

    }
    echo "<br>";
}

echo "</div>";


// ==========================================
// 5. FLECHA HACIA ABAJO
// ==========================================

echo "<h3>5. Flecha hacia abajo</h3>";
echo '<div class="figura">';

// Parte vertical de la flecha
for ($i = 0; $i < 4; $i++) {
    for ($j = 0; $j < 5; $j++) {

        if ($j == 2) {
            echo "* ";
        } else {
            echo "&nbsp;&nbsp;";
        }

    }
    echo "<br>";
}

// Punta de la flecha
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 5; $j++) {

        if ($j >= 2 - $i && $j <= 2 + $i) {
            echo "* ";
        } else {
            echo "&nbsp;&nbsp;";
        }

    }
    echo "<br>";
}

echo "</div>";


// ==========================================
// 6. PIRAMIDE DE NUMEROS
// ==========================================

echo "<h3>6. Piramide de numeros</h3>";
echo '<div class="figura">';

for ($i = 1; $i <= $rows; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo $j . " ";
    }
    echo "<br>";
}

echo "</div>";


// ==========================================
// 7. TRIANGULO DE NUMEROS REPETIDOS
// ==========================================

echo "<h3>7. Numeros repetidos por fila</h3>";
echo '<div class="figura">';

for ($i = 1; $i <= $rows; $i++) {
    for ($j = 0; $j < $i; $j++) {
        echo $i . " ";
    }
    echo "<br>";
}

echo "</div>";


// ==========================================
// 8. TABLA DE MULTIPLICAR
// ==========================================

echo "<h3>8. Tabla de multiplicar</h3>";
echo '<div class="figura">';

for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= 5; $j++) {
        echo ($i * $j) . "\t";
    }
    echo "<br>";
}

echo "</div>";


// ==========================================
// 9. TABLERO DE CEROS Y UNOS
// ==========================================

echo "<h3>9. Tablero de ceros y unos</h3>";
echo '<div class="figura">';

for ($i = 0; $i < $rows; $i++) {
    for ($j = 0; $j < $cols; $j++) {

        if (($i + $j) % 2 == 0) {
            echo "1 ";
        } else {
            echo "0 ";
        }

    }
    echo "<br>";
}

echo "</div>";


// ==========================================
// 10. CORAZON
// ==========================================

echo "<h3>10. Corazon</h3>";
echo '<div class="figura">';

$corazon = [
    "  **   **  ",
    " **** **** ",
    "***********",
    " ********* ",
    "  *******  ",
    "   *****   ",
    "    ***    ",
    "     *     "
];

foreach ($corazon as $fila) {
    for ($j = 0; $j < strlen($fila); $j++) {

        if ($fila[$j] == "*") {
            echo "*";
        } else {
            echo "&nbsp;";
        }

    }
    echo "<br>";
}

echo "</div>";


// ==========================================
// 11. CARA SONRIENTE
// ==========================================

echo "<h3>11. Cara sonriente</h3>";
echo '<div class="figura">';

for ($i = 0; $i < 11; $i++) {
    for ($j = 0; $j < 11; $j++) {

        if (
            // Ojos
            ($i == 3 && ($j == 3 || $j == 7)) ||

            // Sonrisa
            ($i == 7 && $j >= 3 && $j <= 7) ||
            ($i == 6 && ($j == 2 || $j == 8)) ||

            // Contorno aproximado de la cara
            ($i == 0 && $j >= 3 && $j <= 7) ||
            ($i == 10 && $j >= 3 && $j <= 7) ||
            ($j == 0 && $i >= 3 && $i <= 7) ||
            ($j == 10 && $i >= 3 && $i <= 7) ||
            ($i == 1 && ($j == 1 || $j == 9)) ||
            ($i == 9 && ($j == 1 || $j == 9)) ||
            ($i == 2 && ($j == 0 || $j == 10)) ||
            ($i == 8 && ($j == 0 || $j == 10))
        ) {
            echo "* ";
        } else {
            echo "&nbsp;&nbsp;";
        }

    }
    echo "<br>";
}

echo "</div>";


// ==========================================
// 12. ARBOL DE NAVIDAD
// ==========================================

echo "<h3>12. Arbol de Navidad</h3>";
echo '<div class="figura">';

// Hojas
for ($i = 0; $i < 6; $i++) {

    // Espacios
    for ($j = 0; $j < 5 - $i; $j++) {
        echo "&nbsp;";
    }

    // Hojas
    for ($j = 0; $j < 2 * $i + 1; $j++) {
        echo "*";
    }

    echo "<br>";
}

// Tronco
for ($i = 0; $i < 2; $i++) {
    for ($j = 0; $j < 5; $j++) {
        echo "&nbsp;";
    }
    echo "***<br>";
}

echo "</div>";

?>

</body>
</html>

