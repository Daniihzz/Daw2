<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>EJERCICIO 1</h3>
    <?php
    $parImpar = [];

    for ($i=0; $i < 4; $i++) { 
        for ($j=0; $j < 5 ; $j++) { 
            if(($i+$j) % 2 == 0 ){
                $parImpar[$i][$j] = "par";
            }else{
                $parImpar[$i][$j] = "impar";
            }
        }
    }

    for($i = 0; $i < 4; $i++){
        echo implode(", ", $parImpar[$i]);
        echo "<br>";
    }

    ?>
    
</body>
</html>
