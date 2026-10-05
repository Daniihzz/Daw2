<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $respuesta = 3;
    switch ($respuesta) {
        case 1:
            echo "<h1>EJERCICIO1</h1>";
            echo "<p>FIGURA 1";
            echo "<br>";
            echo "<br>";

            $rows = ((ord('N') - ord("A") + 1) % 8) + 4;
            $cols = ((ord('P') - ord("A") + 1) % 6) + 5;
            for ($i = 0; $i < $rows; $i++) {
                for ($j = 0; $j < $cols; $j++) {
                    echo "*";
                    echo "&nbsp;";
                }
                echo "<br>";
            }

            echo "<br>";
            echo "<br>";

            //   CUADRO 2
            echo "<p>FIGURA 2";
            echo "<br>";
            echo "<br>";
            for ($i = 0; $i < $rows; $i++) {
                for ($j = 0; $j < $cols; $j++) {
                    echo "*";
                    echo "&nbsp;";
                }
                echo "<br>";
            }

            echo "<br>";
            echo "<br>";
            //   CUADRO 3
            echo "<p>FIGURA 3";
            echo "<br>";
            for ($i = 0; $i < $rows; $i++) {
                echo "<br>";
                for ($j = 0; $j < $cols; $j++) {
                    if ($i % 2 == 0) {
                        echo "*";
                        echo "&nbsp;&nbsp;";
                    } elseif ($j == $cols - 1) {
                        echo " ";
                    } else {
                        echo "&nbsp;&nbsp;";
                        echo "*";
                    }
                }
            }
            break;
        case 2:




            echo "<h2>Ejercicio 2</h2>";
            $arr = [];

            for ($i = 1; $i <= 6; $i++) {
                for ($j = 1; $j <= 7; $j++) {
                    $arr[$i][$j] = rand(-10, 45) . "º";
                }
            }
            for ($i = 1; $i <= 6; $i++) {
                for ($j = 1; $j <= 7; $j++) {
                    echo $arr[$i][$j];
                    echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                }
                echo "<br>";
            }



            break;
        case 3:
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
                            if ($x % 2 == 1) {
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
            $prueba = [1, 2, 3, 4, 5, 6, 7];
            var_dump(filterByType($prueba, "prime"));

            
            function calculateStatistics($array){
                $sum = array_sum($array);
                $tot = count($array);
                $media = $sum / $tot;
                $moda = 0;

                sort($array);
                $mitad = intdiv(count($array), 2);
                if(count($array) %2==0){
                     $mediana = ($array[$mitad - 1] + $array[$mitad]) / 2;
                } else {
                    $mediana = $array[$mitad];
                }

                $frecuencias = array_count_values($array);
                $maximo =0;
                foreach($frecuencias as $num => $veces){
                        if($veces > $maximo){
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


            break;
    }





    // CUADRO 1
    



    ?>
</body>

</html>