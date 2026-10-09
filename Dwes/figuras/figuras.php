<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Apuntes de figuras en PHP</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 30px;
        }

        .figura {
            font-family: monospace;
            font-size: 18px;
            line-height: 1.4;
            margin-bottom: 25px;
            white-space: nowrap;
        }

        h3 {
            color: darkblue;
        }
    </style>
</head>
<body>

<?php

$rows = 7;
$cols = 9;

// ==========================================
// 1. CUADRADO RELLENO
// ==========================================

echo "<h3>1. Cuadrado relleno</h3>";
echo '<div class="figura">';

for ($i = 0; $i < $rows; $i++) {
    for ($j = 0; $j < $rows; $j++) {
        echo "* ";
    }
    echo "<br>";
}

echo "</div>";


// ==========================================
// 2. RECTANGULO RELLENO
// ==========================================

echo "<h3>2. Rectangulo relleno</h3>";
echo '<div class="figura">';

for ($i = 0; $i < $rows; $i++) {
    for ($j = 0; $j < $cols; $j++) {
        echo "* ";
    }
    echo "<br>";
}

echo "</div>";


// ==========================================
// 3. TRIANGULO RECTANGULO
// ==========================================

echo "<h3>3. Triangulo rectangulo</h3>";
echo '<div class="figura">';

for ($i = 0; $i < $rows; $i++) {
    for ($j = 0; $j <= $i; $j++) {
        echo "* ";
    }
    echo "<br>";
}

echo "</div>";


// ==========================================
// 4. TRIANGULO RECTANGULO INVERTIDO
// ==========================================

echo "<h3>4. Triangulo invertido</h3>";
echo '<div class="figura">';

for ($i = 0; $i < $rows; $i++) {
    for ($j = $i; $j < $rows; $j++) {
        echo "* ";
    }
    echo "<br>";
}

echo "</div>";


// ==========================================
// 5. TRIANGULO RECTANGULO ALINEADO A LA DERECHA
// ==========================================

echo "<h3>5. Triangulo alineado a la derecha</h3>";
echo '<div class="figura">';

for ($i = 0; $i < $rows; $i++) {

    // Espacios iniciales
    for ($j = 0; $j < $rows - $i - 1; $j++) {
        echo "&nbsp;&nbsp;";
    }

    // Asteriscos
    for ($j = 0; $j <= $i; $j++) {
        echo "* ";
    }

    echo "<br>";
}

echo "</div>";


// ==========================================
// 6. PIRAMIDE
// ==========================================

echo "<h3>6. Piramide</h3>";
echo '<div class="figura">';

for ($i = 0; $i < $rows; $i++) {

    // Espacios a la izquierda
    for ($j = 0; $j < $rows - $i - 1; $j++) {
        echo "&nbsp;";
    }

    // Asteriscos de la piramide
    for ($j = 0; $j < 2 * $i + 1; $j++) {
        echo "*";
    }

    echo "<br>";
}

echo "</div>";


// ==========================================
// 7. PIRAMIDE INVERTIDA
// ==========================================

echo "<h3>7. Piramide invertida</h3>";
echo '<div class="figura">';

for ($i = 0; $i < $rows; $i++) {

    // Espacios a la izquierda
    for ($j = 0; $j < $i; $j++) {
        echo "&nbsp;";
    }

    // Asteriscos decrecientes
    for ($j = 0; $j < 2 * ($rows - $i) - 1; $j++) {
        echo "*";
    }

    echo "<br>";
}

echo "</div>";


// ==========================================
// 8. ROMBO
// ==========================================

echo "<h3>8. Rombo</h3>";
echo '<div class="figura">';

// Mitad superior, incluida la fila central
for ($i = 0; $i < $rows; $i++) {

    for ($j = 0; $j < $rows - $i - 1; $j++) {
        echo "&nbsp;";
    }

    for ($j = 0; $j < 2 * $i + 1; $j++) {
        echo "*";
    }

    echo "<br>";
}

// Mitad inferior
for ($i = $rows - 2; $i >= 0; $i--) {

    for ($j = 0; $j < $rows - $i - 1; $j++) {
        echo "&nbsp;";
    }

    for ($j = 0; $j < 2 * $i + 1; $j++) {
        echo "*";
    }

    echo "<br>";
}

echo "</div>";


// ==========================================
// 9. CUADRADO HUECO
// ==========================================

echo "<h3>9. Cuadrado hueco</h3>";
echo '<div class="figura">';

for ($i = 0; $i < $rows; $i++) {
    for ($j = 0; $j < $rows; $j++) {

        if (
            $i == 0 ||
            $i == $rows - 1 ||
            $j == 0 ||
            $j == $rows - 1
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
// 10. TABLERO DE AJEDREZ
// ==========================================

echo "<h3>10. Tablero de ajedrez</h3>";
echo '<div class="figura">';

for ($i = 0; $i < $rows; $i++) {
    for ($j = 0; $j < $cols; $j++) {

        if (($i + $j) % 2 == 0) {
            echo "*";
            echo "&nbsp;";
        } else {
            echo "&nbsp;&nbsp;";
        }

    }
    echo "<br>";
}

echo "</div>";


// ==========================================
// 11. LETRA X
// ==========================================

echo "<h3>11. Letra X</h3>";
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
// 12. SIGNO +
// ==========================================

echo "<h3>12. Signo +</h3>";
echo '<div class="figura">';

for ($i = 0; $i < $rows; $i++) {
    for ($j = 0; $j < $rows; $j++) {

        if (
            $i == floor($rows / 2) ||
            $j == floor($rows / 2)
        ) {
            echo "* ";
        } else {
            echo "&nbsp;&nbsp;";
        }

    }
    echo "<br>";
}

echo "</div>";

?>

</body>
</html>
