<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práctica 1 - Introducción a PHP</title>
    <link rel="stylesheet" href="styles/styleLN.css">
</head>

<body>
    <?php
    require_once __DIR__ . '/functions/functionsLN.php';
    require_once __DIR__ . '/functions/shopLN.php';
    ?>

    <!--  EJERCICIO 1  -->
    <h2>Ejercicio 1</h2>
    <?php

    $rows = ((ord('L') - ord("A") + 1) % 8) + 4;
    $cols = ((ord('N') - ord("A") + 1) % 6) + 5;

    echo "<p>Filas: $rows<br>Columnas: $cols</p>";
    ?>

    <h3>Primera figura (rectángulo completo)</h3>
    <div class="figura">
        <?php
        for ($i = 0; $i < $rows; $i++) {
            for ($j = 0; $j < $cols; $j++) {
                echo "*";
                echo "&nbsp;";
            }
            echo "<br>";
        }
        ?>
    </div>

    <h3>Segunda figura (marco)</h3>
    <div class="figura">
        <?php
        for ($i = 0; $i < $rows; $i++) {
            for ($j = 0; $j < $cols; $j++) {

                if ($i == 0 || $i == $rows - 1 || $j == 0 || $j == $cols - 1) {
                    echo "*";
                    echo "&nbsp;";
                } else {
                    echo "&nbsp;&nbsp;";
                }
            }
            echo "<br>";
        }
        ?>
    </div>

    <h3>Tercera figura (tablero de ajedrez)</h3>
    <div class="figura">
        <?php
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
        ?>
    </div>
    <!--  EJERCICIO 2  -->
    <h2>Ejercicio 2</h2>
    <?php
    $numCiudades = 6;
    $numDias = 7;

    // Array bidimensional: $temperaturas[ciudad][dia]
    $temperaturas = [];
    for ($i = 0; $i < $numCiudades; $i++) {
        for ($j = 0; $j < $numDias; $j++) {
            $temperaturas[$i][$j] = rand(-10, 45);
        }
    }

    // Mínima, máxima y medias, todo en el mismo recorrido.
// Se empieza con valores imposibles para que cualquier temperatura los supere.
    $minima = 100;
    $maxima = -100;
    $ciudadMinima = 0;
    $ciudadMaxima = 0;
    $mediaMasAlta = -100;
    $ciudadMediaAlta = 0;
    $medias = [];

    for ($i = 0; $i < $numCiudades; $i++) {
        $suma = 0;

        for ($j = 0; $j < $numDias; $j++) {
            $temperatura = $temperaturas[$i][$j];
            $suma += $temperatura;

            if ($temperatura < $minima) {
                $minima = $temperatura;
                $ciudadMinima = $i + 1;
            }
            if ($temperatura > $maxima) {
                $maxima = $temperatura;
                $ciudadMaxima = $i + 1;
            }
        }

        // Media de esta ciudad y comprobación de si es la más alta
        $medias[$i] = round($suma / $numDias, 1);
        if ($medias[$i] > $mediaMasAlta) {
            $mediaMasAlta = $medias[$i];
            $ciudadMediaAlta = $i + 1;
        }
    }

    // Día con mayor variación: para cada día (columna) se busca la ciudad
// más fría y la más calurosa, y se guarda el día con mayor diferencia.
    $mayorVariacion = -1;
    $diaMayorVariacion = 0;
    $ciudadFria = 0;
    $ciudadCalida = 0;

    for ($j = 0; $j < $numDias; $j++) {
        $minDia = 100;
        $maxDia = -100;

        for ($i = 0; $i < $numCiudades; $i++) {
            $temperatura = $temperaturas[$i][$j];

            if ($temperatura < $minDia) {
                $minDia = $temperatura;
                $ciudadMinDia = $i + 1;
            }
            if ($temperatura > $maxDia) {
                $maxDia = $temperatura;
                $ciudadMaxDia = $i + 1;
            }
        }

        $variacion = $maxDia - $minDia;
        if ($variacion > $mayorVariacion) {
            $mayorVariacion = $variacion;
            $diaMayorVariacion = $j + 1;
            $ciudadFria = $ciudadMinDia;
            $ciudadCalida = $ciudadMaxDia;
        }
    }
    ?>

    <table>
        <caption>Temperaturas de ciudades por día (ºC)</caption>
        <tr>
            <th>Ciudad/Día</th>
            <?php
            for ($j = 1; $j <= $numDias; $j++) {
                echo "<th>Día $j</th>";
            }
            ?>
            <th>Media</th>
        </tr>

        <?php
        for ($i = 0; $i < $numCiudades; $i++) {
            // La ciudad con mayor media lleva la clase "yellow"
            $claseFila = "";
            if ($i + 1 == $ciudadMediaAlta) {
                $claseFila = "yellow";
            }

            echo "<tr class=\"$claseFila\">";
            echo "<td class=\"ciudad\">Ciudad " . ($i + 1) . "</td>";

            for ($j = 0; $j < $numDias; $j++) {
                $temperatura = $temperaturas[$i][$j];

                // Se van añadiendo las clases CSS que le tocan a esta celda
                $clases = "";
                if ($temperatura < 0) {
                    $clases .= "blue ";
                }
                if ($temperatura > 35) {
                    $clases .= "red ";
                }
                if ($temperatura == $minima) {
                    $clases .= "bold ";
                }
                if ($temperatura == $maxima) {
                    $clases .= "cursiva ";
                }
                if ($j >= 5) { // días 6 y 7 = fin de semana
                    $clases .= "green ";
                }

                echo "<td class=\"$clases\">$temperatura º</td>";
            }

            echo "<td class=\"media\">" . $medias[$i] . " º</td>";
            echo "</tr>";
        }
        ?>
    </table>

    <table class="tabla">
        <caption>Estadística</caption>
        <tr>
            <td class="tablita">Temperatura mínima: <?= $minima ?> º (Ciudad <?= $ciudadMinima ?>)</td>
        </tr>
        <tr>
            <td class="tablita">Temperatura máxima: <?= $maxima ?> º (Ciudad <?= $ciudadMaxima ?>)</td>
        </tr>
        <tr>
            <td class="tablita">
                Día con mayor variación: Día <?= $diaMayorVariacion ?>
                (<?= $mayorVariacion ?> ºC de diferencia, entre la Ciudad <?= $ciudadFria ?>
                y la Ciudad <?= $ciudadCalida ?>)
            </td>
        </tr>
    </table>

    <!--  EJERCICIO 3  -->
    <h2>Ejercicio 3</h2>
    <?php
    $prueba = [-5, -2, 1, 2, 3, 4, 5, 6, 7, 10, 2];

    echo "<h3>filterByType</h3><pre>";
    echo "Array de prueba: " . implode(", ", $prueba) . "\n";
    echo "even: ";
    var_dump(filterByType($prueba, "even"));
    echo "odd: ";
    var_dump(filterByType($prueba, "odd"));
    echo "prime: ";
    var_dump(filterByType($prueba, "prime"));
    echo "positive: ";
    var_dump(filterByType($prueba, "positive"));
    echo "negative: ";
    var_dump(filterByType($prueba, "negative"));
    echo "</pre>";

    echo "<h3>calculateStatistics</h3><pre>";
    var_dump(calculateStatistics($prueba));
    echo "</pre>";

    echo "<h3>analyzeWords</h3><pre>";
    $texto = "hola adiós, buenos días a todos";
    echo "Texto: \"$texto\"\n";
    var_dump(analyzeWords($texto));
    echo "</pre>";

    echo "<h3>convertTemperature</h3><pre>";
    echo "25 ºC a Fahrenheit (por defecto): ";
    var_dump(convertTemperature(25));
    echo "100 ºC a Kelvin: ";
    var_dump(convertTemperature(100, "celsius", "kelvin"));
    echo "32 ºF a Celsius: ";
    var_dump(convertTemperature(32, "fahrenheit", "celsius"));
    echo "Unidad inexistente: ";
    var_dump(convertTemperature(10, "metros", "celsius"));
    echo "</pre>";
    ?>

    <!-- EJERCICIO 4 -->
    <h2>Ejercicio 4</h2>
    <?php
    /*
     Pinta una tabla con los productos. Si un producto tiene la clave
     'descuento', muestra el precio original tachado y el precio rebajado.
     */
    function printProductsTable($listaProductos)
    {
        echo "<table>";
        echo "<tr><th>Nombre</th><th>Precio (IVA incluido)</th><th>Stock</th></tr>";

        foreach ($listaProductos as $producto) {
            $precio = calculateIVA($producto['precio']);

            // Si tiene descuento: precio original tachado + precio rebajado
            if (isset($producto['descuento'])) {
                $precioRebajado = $precio * (1 - $producto['descuento'] / 100);
                $textoPrecio = "<del>" . formatPrice($precio) . "</del> " . formatPrice($precioRebajado);
            } else {
                $textoPrecio = formatPrice($precio);
            }

            // Color del stock: verde > 10, amarillo > 0, rojo = 0
            if ($producto['stock'] > 10) {
                $claseStock = "stock-alto";
            } elseif ($producto['stock'] > 0) {
                $claseStock = "stock-medio";
            } else {
                $claseStock = "stock-bajo";
            }

            echo "<tr>";
            echo "<td>" . ucfirst($producto['nombre']) . "</td>";
            echo "<td>$textoPrecio</td>";
            echo "<td class=\"$claseStock\">" . $producto['stock'] . "</td>";
            echo "</tr>";
        }

        echo "</table>";
    }

    printProductsTable($productos);

    // getStock: productos que tienen existencias
    $disponibles = getStock($productos);
    echo "<p>Productos disponibles: " . count($disponibles) . "</p>";
    ?>

    <h2>Ejercicio 4.1</h2>
    <?php
    printProductsTable($productosConDescuento);
    ?>
</body>

</html>