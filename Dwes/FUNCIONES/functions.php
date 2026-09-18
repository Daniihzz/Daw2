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


    ?>
</body>
</html>