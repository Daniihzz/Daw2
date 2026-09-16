<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $tinto = 12.2341234;
    echo number_format($tinto,2). "€";
    echo "<br>";
    $age = 21;
    
    if($age >= 18){
        echo "<p>Puedes entrar</p>";
    } else {
        echo "<p>No puedes entrar</p>";
    }

    $edad = 20;
    $dinero = 15;

    if($edad >= 18 && $dinero>=10){
        echo "Puedes entrar y tienes dinero";
    } else {
        echo "no puedes entrarxd";
    }

    $nombre = "Daniel";
    $edad = 20;
    $dinero = 50;
    $esMiembro = true;

    $producto = "Teclado";
    $precio = 45;

    /*if ($edad >= 20){
        if($dinero > $precio){
            if($esMiembro){
                $descuento = $precio * 0.10;
                $nuevoPrecio = $precio - $descuento;
                echo "<br>";
                echo "Precio original: " . $precio . "€";
                echo "<br>";
                echo "Descuento: " . $descuento;
                 echo "<br>";
                echo "Precio final:" . number_format($nuevoPrecio, 2) . "€";
            } else {
                echo "Precio final: " . $precio;
            }
        } else {
            echo "<br>";
            echo $nombre . " " . "no tienes suficiente dinero";
        }
    } else {
        echo "<br>";
        echo $nombre . " " . "no puedes realizar esta compra";
    } */

    if($edad < 18){
        echo "Eres menor";
    }
    elseif($dinero < $precio){
        echo "No tienes dinero";
    }
    elseif($esMiembro){
        $descuento = $precio * 0.10;
                $nuevoPrecio = $precio - $descuento;
                echo "<br>";
                echo "Precio original: " . $precio . "€";
                echo "<br>";
                echo "Descuento: " . $descuento;
                echo "<br>";
                echo "Precio final:" . number_format($nuevoPrecio, 2) . "€";
            } else {
                echo "Precio final: " . $precio;
            }

    $frutas = ["manzana", "platano", "fresa", "naranja"];
    echo "<br>";echo "<br>";
    echo $frutas[0];

    foreach ($frutas as $fruta){
    echo "<br>";   
    echo $fruta;
    }
    
    

?>
</body>
</html>
