<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionles y bucles</title>
</head>
<body>
    <h2>Condicionales</h2>
    <?php
    $age = 20;
    if($age >= 18){
        echo "<p>Eres mayor de edad</p>";
    } else {
        echo "<p>Eres menor de edad</p>";
    }

    $dia = 3;
    $nombre = match($dia){
        1 => "Lunes",
        2 => "Martes",
        3 => "Miercoles",
        4 => "Jueves",
        5 => "Viernes",
        6,7=> "fin de semana",
        default => "Dia no valido"
    };
    echo $nombre;

   echo "<br>";
    for($i = 1; $i<=10; $i++){
        echo $i . ",";
    }
    echo "<br>";
    for($i = 1; $i<=100; $i++){

        if($i % 5 == 0 && $i % 7 == 0){
            echo $i . "-";
        }
    }


    ?>
</body>
</html>