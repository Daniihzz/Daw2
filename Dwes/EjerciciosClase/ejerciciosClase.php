<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios de clase</title>
</head>

<body>
    <?php
    $respuesta = 4;
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
                        echo "<td>" . $number . "</td>";
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
                        <th>X</th>
                        <?php
                        for ($i = 0; $i <= 10; $i++) {
                            echo "<th>" . $i . "</th>";
                        }
                        ?>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    for ($i = 0; $i <= 10; $i++) {
                        echo "<tr>";
                        echo "<td>" . $i . "</td>";
                        echo "</tr>";
                    }
                    ?>
                    <?php
                    ?>
                </tbody>
            </table>
            <?php
            break;



        case 5:
            break;
    }

    ?>
</body>

</html>