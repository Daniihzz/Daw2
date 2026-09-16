<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello world</title>
</head>

<body>
    <p>La siguiente linea esta hecha con PHP:</p>
    <?php
    echo "<p>hello world!</p>";

    ?>
    <p>Esta linea tmb</p>
    <p>
        <?php
        echo "Hola mundo";
        echo "<br>";
        echo "otra cosa";
        echo "<br>";
        echo ("parentesis");
        //Variables:
        //String:
        
        $name = "Daniel";
        $surname = 'Navarro';
        echo "<br>";
        echo $name;
        echo "<br>";
        echo $name . " - " . $surname;
        echo "<br>";
        echo "$name - $surname";

       //numeros
        echo "<br>";
        $age = 20;
        $suma = 12;
        echo "<p>Tengo $age años </p>";
        echo "tengo " .  ($age + $suma) . " años";
        var_dump($age);
        $age= "asdkalsd";
        var_dump($age);
        $age = false;
        var_dump($age); 
        

        //CONSTANTES
        define("IVA_GENERAL", 0.21);
        const IVA_REDUCIDO = 0.08;
        $precio = 20.3;
        echo "<p>El precio de IVA es: " . $precio + $precio * IVA_GENERAL . "</p>";
        echo "<p>El precio de IVA reducido  es: " . $precio + $precio  * IVA_REDUCIDO . "</p>";

        var_dump(PHP_VERSION);

        var_dump (__LINE__);
        echo "<br>";
        var_dump(__FILE__);
        
        echo __


            ?>
    </p>
</body>

</html>