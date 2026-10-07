<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <?php
        require_once "functions/functionsLN.php";
        foreach (basicStatistics(1, 2, 3, -2, 9, -3) as $clave => $valor){
           if($clave == "odd") {
            echo "<li>".$clave. " = ".implode(",",$valor) . "</li>";
           } else {
            echo "<li>".$clave. " = ".$valor . "</li>";
           }
        }
    echo "<br>";echo "<br>";
    echo implode(",",operations([15, 6, 8.3, 4])); // [4, 6, 8.3, 15]
    echo "<br>";echo "<br>";
    echo implode(",",operations([15, 6, 8.3, 4], "order", false)) ; // [15, 8.3, 6, 4]
    echo "<br>";echo "<br>";
    echo operations([15, 6, 8.3, 4], "sum"); // 33.3
    echo "<br>";echo "<br>";
    echo operations([15, 6, 8.3, 4], "product"); // 2988
        ?>
    </ul>
    <?php
    
    ?>
</body>
</html>