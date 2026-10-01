<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $rows = 5;
        $colums = 7;
        for($i = 0; $i < $rows; $i++){
            echo "<br>";
            for($j = 0; $j < $colums;$j++){
                echo " * ";
            }
        }
         echo "<br>";

        for($i = 0; $i < $rows; $i++){
            echo "<br>";
            for($j = 0; $j < $colums;$j++){
                if($j%2 == 0){
                    echo " * "; 
                } else {
                    echo "        ";
                }
            }
        }
        ?>
</body>
</html>