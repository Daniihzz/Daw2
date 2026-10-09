<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    require "datos/products.php";
    require "datos/games.php";
    require "datos/students.php";

    echo "<h3>EJERCICIO 1</h3>";
    $tablero = [];
    for ($i = 0; $i < 5; $i++) {
        for ($j = 0; $j < 6; $j++) {
            if (($i + $j) % 3 == 0) {
                $tablero[$i][$j] = "X ";
            } else {
                $tablero[$i][$j] = "O ";
            }
        }
    }
    foreach ($tablero as $key) {
        foreach ($key as $x) {
            echo $x;
        }
        echo "<br>";
    }
    echo "<br>";
    ///////////////////////////////////////////////
    echo "<h3>EJERCICIO 2</h3>";
    $sum = 0;
    $precios = [];
    $maximo = 0;
    $minimo = INF;
    $hard = 0;
    $peri = 0;
    foreach ($products as $x) {
        if ($x["price"] > $maximo) {
            $maximo = $x["price"];
        }

        if ($x["price"] < $minimo) {
            $minimo = $x["price"];
        }
        if ($x["category"] == "Hardware") {
            $hard++;
        }
        if ($x["category"] == "Peripherals") {
            $peri++;
        }

        $sum += $x["price"];
        $precios[] = $x["price"];
    }

    echo "PRECIO TOTAL: $sum";
    echo "<br>";
    echo "PRECIO MEDIO:" . ($sum / count($products));
    echo "<br>";
    echo "PRODUCTO MAS CARO: " . $maximo;
    echo "<br>";
    echo "PRODUCTO MAS BARATO: " . $minimo;
    echo "<br>";
    echo "PRODUCTOS HARDWARE: " . $hard;
    echo "<br>";
    echo "PRODUCTOS PERIPHERALS: " . $peri;
    /////////////////////////////////////////
    
    echo "<h3>EJERCICIO 3</h3>";
    $survi = 0;
    $rpg = 0;
    $sports = 0;
    $h_survi = 0;
    $h_rpg = 0;
    $h_sports = 0;
    $maximo = 0;
    $juego = "";
    foreach ($games as $p) {
        if ($p["hours"] > $maximo) {
            $maximo = $p["hours"];
            $juego = $p["title"];
        }
        switch ($p["genre"]) {
            case "survival":
                $survi++;
                $h_survi += $p["hours"];
                break;
            case "rpg":
                $rpg++;
                $h_rpg += $p["hours"];
                break;
            case "sports":
                $sports++;
                $h_sports += $p["hours"];
                break;
        }

    }
    echo "<h4>SURVIVAL</h4>";
    echo "Juegos: " . $survi;
    echo "<br>";
    echo "Horas totales: " . $h_survi;
    echo "<h4>RPG</h4>";

    echo "Juegos: " . $rpg;
    echo "<br>";
    echo "Horas totales: " . $h_rpg;


    echo "<h4>SPORTS</h4>";
    echo "Juegos: " . $sports;
    echo "<br>";
    echo "Horas totales: " . $h_sports;

    echo "<br>";
    echo "<h4>Parte 2</h4>";

    echo "Juego con mas horas: " . $juego;
    echo "<br>";
    echo "Horas: " . $maximo
    ;

    ////////////////////////////////////////
    ?>
    <table border="1">
    <tr>    
    <th>Nombre</th>
        <th>Curso</th>
        <th>Edad</th>
        <th>Nota</th>
        </tr>
        <?php
        $sus = 0;
        $mejor = "";
        $mejorNota = 0;
        foreach ($students as $x) {
           if($x["grade"]<5)$sus++;
        if($x["grade"]>$mejorNota){
            $mejorNota = $x["grade"];
            $mejor = $x["name"];
        }


        echo "<tr>";
            echo "<td>".$x["name"]."</td>";
             echo "<td>".$x["course"]."</td>";
             echo "<td>".$x["age"]."</td>";
             echo "<td>".$x["grade"]."</td>";
             echo "</tr>";                   
        }
        
        ?>

    </table>
    <?php
    echo "Alumnos suspensos: ". $sus;
    echo "<br>";
    echo "Mejor alumno: " . $mejor . " con " . $mejorNota;
    ?>


</body>

</html>