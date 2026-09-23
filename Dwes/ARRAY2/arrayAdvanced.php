<?php
include "./InfoArray/restaurante.php";
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Array de restaurante</h1>
    <p>La direccion de Carpaccio es:
        <?php
        echo $pinoccio[0]["address"];
        ?>
    </p>
    <p>El numero de camareros de Luigi
        <?php
        echo $pinoccio[0]["employees"][0];
        ?>
    </p>
    <p>El numero de bebidas de Carpaccio
        <?php
        echo $pinoccio[0]["quantity"]["drinks"];
        ?>
    </p>
    arning: Undefined array key "employees" in /home
    <p>El nombre de los dos restaurantes obtenidos con un bucle es:
    <ul>
        <?php
        for ($i = 0; $i < count($pinoccio); ++$i) {
            echo "<li>";
            echo $pinoccio[$i]["name"];
            echo "</li>";
        }
        ?>
    </ul>
    </p>

    <p>Los empleados de ambos restaurantes: </p>
    <?php
    foreach ($pinoccio as $p) {
        echo $p["name"] . ":";
        if (isset($p["employees"])) {
            echo implode(", ", $p["employees"]);
            echo "<br>";
        }
    }
    ?>
    
    <table border="1">
        <tr>
            <th>Nombre</th>
            <th>Cocina</th>
            <th>Camareros</th>
            <th>Otros</th>
        </tr>
    </table>



</body>

</html>