<?php
/**
 * functionsLN.php
 * Funciones del Ejercicio 3 (Práctica 1)
 */

/**
 * Filtra un array según un tipo: "even", "odd", "prime", "positive" o "negative".
 * Devuelve un array con los elementos que cumplen la condición.
 */
function filterByType($array, $type)
{
    $total = [];

    switch ($type) {
        case "even":
            foreach ($array as $x) {
                if ($x % 2 == 0) {
                    $total[] = $x;
                }
            }
            break;
        case "odd":
            foreach ($array as $x) {
                // != 0 (y no == 1) porque en php -3 % 2 da -1
                if ($x % 2 != 0) {
                    $total[] = $x;
                }
            }
            break;
        case "prime":
            foreach ($array as $x) {
                $esPrimo = true;

                if ($x < 2) {
                    $esPrimo = false;
                } else {
                    // Si algún número entre 2 y x-1 lo divide, no es primo
                    for ($i = 2; $i < $x; $i++) {
                        if ($x % $i == 0) {
                            $esPrimo = false;
                            break;
                        }
                    }
                }
                if ($esPrimo) {
                    $total[] = $x;
                }
            }
            break;
        case "positive":
            foreach ($array as $x) {
                if ($x > 0) {
                    $total[] = $x;
                }
            }
            break;
        case "negative":
            foreach ($array as $x) {
                if ($x < 0) {
                    $total[] = $x;
                }
            }
            break;
    }

    return $total;
}

/**
 * Devuelve la media, mediana y moda de un array de números
 * (o false si el array está vacío).
 */
function calculateStatistics($array)
{
    $tot = count($array);

    // No entra si no tiene nada (Array vacio)
    if ($tot == 0) {
        return false;
    }
    
    $sum = array_sum($array);
    $media = $sum / $tot;
    $moda = 0;

    //MEDIANA
    sort($array);
    $mitad = intdiv($tot, 2);
    if ($tot % 2 == 0) {
        $mediana = ($array[$mitad - 1] + $array[$mitad]) / 2;
    } else {
        $mediana = $array[$mitad];
    }

    
   //MODA
    $frecuencias = array_count_values($array);
    $maximo = 0;
    foreach ($frecuencias as $num => $veces) {
        if ($veces > $maximo) {
            $maximo = $veces;
            $moda = $num;
        }
    }

    return [
        "media" => $media,
        "mediana" => $mediana,
        "moda" => $moda
    ];
}

/*
 Recibe un texto y devuelve el número de palabras,
  la palabra más larga y la más corta.
 */
function analyzeWords($texto)
{
    // Separa el texto en palabras (ignora espacios y signos de puntuación).
    $arr = explode(" ", $texto);
    $maximo = 0;
    $nuevo = 0;
    $larga = "";
    $cont = 0;
    $minimo = PHP_INT_MAX;
    $palabraCorta = "";

    foreach ($arr as $ax) {
        $nuevo = strlen($ax);
        if ($nuevo > $maximo) {
            $maximo = $nuevo;
            $larga = $ax;
        }
    }

    foreach ($arr as $ax) {
        $nuevo = strlen($ax);
        if ($nuevo < $minimo) {
            $minimo = $nuevo;
            $palabraCorta = $ax;
        }
    }

    foreach ($arr as $ax) {
        $cont++;
    }

    return [
        "number_of_words" => $cont,
        "longest_word" => $larga,
        "shortest_word" => $palabraCorta
    ];
}

/*
  Convierte una temperatura entre "celsius", "fahrenheit" y "kelvin".
  Por defecto convierte de celsius a fahrenheit.
  Devuelve false si alguna unidad no existe.
 */

function convertTemperature($temp, $origen = "celsius", $dest = "fahrenheit")
{
    $tinto = false;      
    $tempNueva = 0;
    $celsius = 0;

    // pasar siempre la temperatura de origen a celsius
    switch ($origen) {
        case "celsius":
            $celsius = $temp;
            break;
        case "fahrenheit":
            $celsius = ($temp - 32) * 5 / 9;
            break;
        case "kelvin":
            $celsius = $temp - 273.15;
            break;
        default:
            $tinto = true;
    }

    //pasar de celsius las de destino
    switch ($dest) {
        case "celsius":
            $tempNueva = $celsius;
            break;
        case "fahrenheit":
            $tempNueva = $celsius * 9 / 5 + 32;
            break;
        case "kelvin":
            $tempNueva = $celsius + 273.15;
            break;
        default:
            $tinto = true;
    }

    if ($tinto) {
        return false;
    }

    return $tempNueva;
}
