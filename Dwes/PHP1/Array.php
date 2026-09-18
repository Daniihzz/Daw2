<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>

<body>
    <h1>Arrays</h1>
    <h2>Arrays indexados</h2>
    <?php
    $cars = array("Seat", "Audi", "BMW");
    $food = ["tomatoes", "avocados", "carrots"];

    //Quiero añadir otra comida: berenjena
    $food[3] = "aubergines";
    $food[3] = "eggplants"; //sobrescribe el valor
    
    //Quiero añadir al final calabacín
    $food[] = "zucchini";

    foreach ($food as $f) {
        echo "$f<br>";
    }

    echo "<br>";

    $food[7] = "cucumbers";
    foreach ($food as $f) {
        echo "$f<br>";
    }
    ?>

    <h2>Arrays asociativos</h2>
    <?php
    $capitals = [
        "Ecuador" => "Quito",
        "Spain" => "Madrid",
        "Norway" => "Oslo"
    ];
    echo "<p>La capital de Noruega es " . $capitals['Norway'] . "</p>"; //Oslo
    //echo "<p>La capital de Noruega es " . $capitals[2] . "</p>";    //Error
    echo count($capitals);  //3
    //Meto un elemento nuevo: Colombia - Bogotá
    $capitals['Colombia'] = 'Bogotá';
    $capitals["Georgia"] = "Tbilisi";
    echo "<br>";
    echo "<br>";
    foreach ($capitals as $capita) {
        echo $capita . ".<br>";
    }

    foreach($capitals as $c => $capital){
        echo "La capital de $c es $capital<br>";
    }
   //Para borrar datos de variables
    unset($capitals["Colombia"]);
    var_dump($capitals);

    if(isset($capitals["Georgia"])){
        echo "La capital de Georgia es " . $capitals["Georgia"]. "<br>";
    } else {
        echo "No tiene xd<br>";
    }

    ?>
    <h2>Funciones con Arrays</h2>
    <?php
    $notas = [9.0,6.9,7.5,8.2];
    //suma
    $suma = array_sum($notas);
    echo $suma;
    echo"<br>";
    //Longitud y media
    $numeroDeNotas = count($notas);
    $media = $suma / $numeroDeNotas;
    echo $media;
    //ORGANIZARLO sort => menor a mayor rsort => mayor a menos
    sort($notas);
    var_dump($notas); 

    //REVOLVER
    shuffle($notas);
    var_dump($notas); 

    //Nota mas alta
    rsort($notas);
    echo $notas[0];

    //BUSCAR UN ELEMENTO
    var_dump(in_array(9.0, $notas));
    var_dump(in_array(9.1, $notas));

    //IMPLODE
    echo implode(",",$notas);
    ?>
</body>

</html>