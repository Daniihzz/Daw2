<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel = "stylesheet" href="../styleDWES/style.css">
</head>
<body>
    <?php
    $students = [
    ["nombre" => "Ana García", "matematicas" => 8.5, "historia" => 7.0, "programacion" => 9.0],
    ["nombre" => "Luis Martínez", "matematicas" => 6.0, "historia" => 8.5, "programacion" => 7.5],
    ["nombre" => "Marta Rodríguez", "matematicas" => 9.0, "historia" => 6.5, "programacion" => 8.0],
    ["nombre" => "Carlos López", "matematicas" => 7.5, "historia" => 9.0, "programacion" => 6.5],
    ["nombre" => "Elena Torres", "matematicas" => 8.0, "historia" => 7.5, "programacion" => 9.5]
]; 

    ?>
    <table border="1">
        <thead>
            <!-- tr>th*2 -->
             <tr>
                <th>NOMBRE</th>
                <th>MATEMATICAS</th>
             </tr>
        </thead>
        <tbody>
            <?php
            foreach($students as $key):
            ?>
            <tr>
                <td>
                    <?=$key['nombre'];?>
                </td>

                <td class=
                <?php
                if($key['matematicas'] > 8){
                    echo "green";
                }
                ?>
                >
                    <?=$key['matematicas'];?>
        
                </td>
            </tr>
            
            <?php
            endforeach;
            
            ?>
        </tbody>

    </table>
</body>
</html>