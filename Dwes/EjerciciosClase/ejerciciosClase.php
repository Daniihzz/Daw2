<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios de clase</title>
    <link rel="stylesheet" href="estilitos.css">
</head>

<body>
    <?php
    $respuesta = 3;
    switch ($respuesta) {
        case 1:
            $number = 2;
            ?>
            <table border="1">
                <thead>
                    <tr>
                        <th>a</th>
                        <th>b</th>
                        <th>c</th>
                    </tr>
                </thead>
                <tbody>
                    
                    <?php
                    for ($i = 0; $i <= 10; $i++) {
                        echo "<tr>";
                        echo "<td>" . 112312 . "</td>";
                        echo "<td>" . $i . "</td>";
                        echo "<td>" . ($i) * ($number) . "</td>";
                        echo "</tr>";
                    }
                    ?>
                    <?php
                    ?>
                </tbody>
            </table>
            <?php
            break;
        case 2:
            $arr = [];
            $numero1 = 0;
            $numero2 = 1;
            for ($i = 0; $i <= 20; $i++) {
                $arr[] = $numero1;
                $memoria = $numero1 + $numero2;
                $numero1 = $numero2;
                $numero2 = $memoria;
            }
            echo implode(",", $arr);
            break;



        case 3:
            $rows = 3;
            $colums = 5;

            for ($i = 0; $i < $rows; $i++) {
                echo "<br>";
                for ($j = 0; $j < $colums; $j++) {
                    echo "*";
                }
            }
            break;



        case 4:

            ?>
            <table border="1">
                <thead>
                    <tr>
                        <th class="x">X</th>
                        <?php
                        for ($i = 0; $i <= 9; $i++) {
                            echo "<th class='loca'>" . $i . "</th>";
                        }
                        ?>
                    </tr>$promM
                </thead>
                <tbody>
                    <?php
                    for ($i = 0; $i <= 9; $i++) {
                        echo "<tr>";
                        echo "<td class ='queso'>" . $i . "</td>";
                        for($j = 0; $j <= 9; $j++){
                        echo "<td class='loco'>" . ($i * $j) . "</td>";
                        }
                        echo "</tr>";
                    }
                    ?>
                    
                </tbody>
            </table>
            <?php
            break;

        case 5:
            $random = [];
            for($i = 0; $i <= 20; $i++){
            $random[]= rand(10,50);
            }
            
           echo "<p>" . implode(",", $random);

           echo "<p>" . "SUMA";
           echo "<br>". $sum = array_sum($random);

            echo "<p>" . "MEDIA";
           echo "<br>". $sum = array_sum($random) / $cont = count($random);
            
           echo "<p>" . "MAX";
           echo "<br>". $smax = max($random);

           echo "<p>" . "MIN";
           echo "<br>". $smin = min($random);
        break;

        case 6:
            $students = [
    ["nombre" => "Ana García", "matematicas" => 8.5, "historia" => 7.0, "programacion" => 9.0],
    ["nombre" => "Luis Martínez", "matematicas" => 6.0, "historia" => 8.5, "programacion" => 7.5],
    ["nombre" => "Marta Rodríguez", "matematicas" => 9.0, "historia" => 6.5, "programacion" => 8.0],
    ["nombre" => "Carlos López", "matematicas" => 7.5, "historia" => 9.0, "programacion" => 6.5],
    ["nombre" => "Elena Torres", "matematicas" => 8.0, "historia" => 7.5, "programacion" => 9.5]
]; 
            $tot = count($students);
            for($i = 0; $i < count($students);$i++){
                $sumM = $students[$i]["matematicas"] + $students[$i]["historia"] + $students[$i]["programacion"];
                $promM = $sumM / $tot;
                $students[$i]["media"] = $promM;
            }
            var_dump($students);

            foreach($students as $x){
                
            }


            // foreach($students as $x){
            //     $sumM = $x["matematicas"] + $x["historia"] + $x["programacion"];
            //     echo $sumM;
            //     echo "<br>";
            //     $promM = $sumM / $tot;
            //     echo $promM;
            //      echo "<br>"; echo "<br>";
            //         $x["media"] = $promM;
            // }

        
        break;
    }

    ?>
</body>

</html>