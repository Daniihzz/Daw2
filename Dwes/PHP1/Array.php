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
    $capitals['Portugal'] = 49;
    $capitals["Georgia"] = "Tbilisi";
    echo "<br>";
    echo "<br>";
    foreach ($capitals as $capita) {
        echo $capita . ".<br>";
    }


    ?>
</body>

</html>