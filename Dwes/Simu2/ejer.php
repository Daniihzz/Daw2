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

    echo "<h3>EJERCICIO 1</h3>";
    $tablero = [];
    for($i = 0; $i < 5; $i++){
        for($j = 0; $j < 6; $j++){
        if(($i+$j) %3 == 0){
            $tablero[$i][$j] = "X ";
        } else {
            $tablero[$i][$j] = "O ";
        }
    } 
}
   foreach ($tablero as $key ) {
    foreach($key as $x){
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
    foreach($products as $x){
    if($x["price"] > $maximo){
        $maximo = $x["price"];
    }

    if($x["price"]<$minimo){
        $minimo = $x["price"];
    }
    if($x["category"]=="Hardware"){
        $hard++;
    }
    if($x["category"]=="Peripherals"){
        $peri++;
    }

        $sum += $x["price"];
        $precios[]=$x["price"];
    }

    echo "PRECIO TOTAL: $sum";
    echo "<br>";
    echo "PRECIO MEDIO:" . ($sum/count($products));
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
    foreach($games as $p){
        switch($p["genre"]){
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
    echo "Horas totales: " .$h_survi;
    echo "<h4>RPG</h4>";
     
    echo "Juegos: " . $rpg;
    echo "<br>";
    echo "Horas totales: " .$h_rpg;
    

    echo "<h4>SPORTS</h4>";
    echo "Juegos: " . $sports;
    echo "<br>";
    echo "Horas totales: " .$h_sports;


   ?>
</body>
</html>