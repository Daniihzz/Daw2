<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // Funcion que reciba una cantidad de 
    // notas y devuelve la cantidad de personas aprobadas
    function aprobados(array $notas):int{
        $pasa = 0;
        $noPasa = 0;
        foreach($notas as $n){
            if($n < 5){
                $noPasa++;
            } else {
                $pasa++;
            }
        }
        return $pasa;
    }

    $dani = [1,4,7,8,5,6,8,9,3];
    echo aprobados([1,4,7,8,5,6,8,9,3]);

    echo "<br>";echo "<br>";
    
    function concatenacion($palabra, $palabra2): string{
        return $palabra . $palabra2;
    } 

    echo concatenacion("Hola", "Joaquin");


    function saludo($nombre, $saludito = "Hola"): string{
        return $saludito . ", " . $nombre;
    }
    echo "<br>";echo "<br>";
    echo saludo("Juan");


    function ordenar(array $arr, bool $boo) {
        if($boo){
            rsort($arr);
        } else {
           sort($arr);
        }
         return $arr;
    }

    echo "<br>";echo "<br>";

    var_dump(ordenar([3,2,6,4], true));
    var_dump(ordenar([3,2,6,4], false));

    echo "<br>";echo "<br>";
    function suma(...$nums){
        return array_sum($nums);
    }

   echo suma(2,1,34,56,6,1,4,4,1,4,54,2)


    ?>
</body>
</html>