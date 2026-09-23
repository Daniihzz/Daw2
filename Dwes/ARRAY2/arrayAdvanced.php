<?php
include "./InfoArray/restaurante.php";
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
</body>
</html>