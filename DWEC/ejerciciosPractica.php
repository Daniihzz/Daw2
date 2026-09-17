<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $ejercicio = 6;
    //cambiar el numero para cambiar de ejercicio y probarlo xd
    switch ($ejercicio){
        case 1:
            echo '<script src="ejerciciosPractica1.js"></script> ';
            break;
        case 2:
            echo '<script src="ejerciciosPractica2.js"></script>';
            break;
        case 3:
            echo '<script src="ejerciciosPractica3.js"></script>';
            break;
        case 4:
            echo '<script src="ejerciciosPractica4.js"></script>';
            break;
         case 5:
            echo '<script src="ejerciciosPractica5.js"></script>';
            break;
             case 6:
            echo '<script src="ejerciciosPractica6.js"></script>';
            break;
            }
       
    ?>
    </body>
</html>