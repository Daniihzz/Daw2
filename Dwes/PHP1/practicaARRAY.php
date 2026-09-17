<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
   
    //Array indexado
    
    $frutas = ["manzana", "platano", "fresa", "naranja"];
    echo "<br>";echo "<br>";
    echo $frutas[0];

    //foreach

    foreach ($frutas as $fruta){
    echo "<br>";   
    echo $fruta;
    }




    //Arrayo asociativo y ejercicio

    $usuario = ["Daniel", 20, "España"];
    
    $usuario2 = [
        "nombre" => "Daniel",
        "edad" => 20,
        "pais" => "España"
    ];


        echo "<br>";echo "<br>";
        echo $usuario2 ["edad"];

        $yo = [
            "nombre" => "Daniel",
            "edad" => 20,
            "curso" => "2Daw",
            "lenguaje" => "php"
        ];
        echo "<br>";
        echo "Hola, soy " . $yo["nombre"];
        echo "<br>";
        echo "Tengo " . $yo["edad"] . " años";
        echo "<br>";
        echo "Estudio ". $yo["curso"];
        echo "<br>";
        echo "Estoy aprendiendo " . $yo["lenguaje"];
        


    //Array dentro de Array
        $usuarios = [
            [
                "nombre" => "Daniel",
                "edad" => 20
            ],

            [
                "nombre" => "Ana",
                "edad" => 21
            ],

            [
                "nombre" => "Maripaz",
                "edad" => "71"
            ]
        ];
    echo "<br>";
        echo $usuarios[1]["nombre"];

?>
</body>
</html>
