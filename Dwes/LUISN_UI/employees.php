<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>EJERCICIO 4</h3>
    <?php
    $employees = [
        [
            "id" => "E001",
            "name" => "Ana García",
            "department" => "Sales",
            "salary" => 32000,
            "seniority" => 3
        ],
        [
            "id" => "E002",
            "name" => "Marta Rodríguez",
            "department" => "IT",
            "salary" => 45000,
            "seniority" => 1
        ],
        [
            "id" => "E003",
            "name" => "Luis Martínez",
            "department" => "IT",
            "salary" => 38000,
            "seniority" => 5
        ],
        [
            "id" => "E004",
            "name" => "Carlos López",
            "department" => "Sales",
            "salary" => 42000,
            "seniority" => 2
        ],
        [
            "id" => "E005",
            "name" => "Fatima Alvarez",
            "department" => "IT",
            "salary" => 34000,
            "seniority" => 2
        ],
    ];
    echo "<ol>";
    foreach ($employees as $x) {
        if ($x["department"] == "Sales") {
            echo "<li>";
            echo $x["name"] . " - " . $x["salary"];
            echo "</li>";
        }
    }
    echo "</ol>";

    $sales = 0;
    $sumSales = 0;
    $it = 0;
    $sumIt = 0;
    foreach ($employees as $x) {
        switch ($x["department"]) {
            case 'Sales':
                $sumSales += $x["salary"];
                $sales++;
                break;
            case 'IT':
                $sumIt += $x["salary"];
                $it++;
                break;
        }
    }
     echo "El salario medio de IT es " . ($sumIt/$it); 
     echo "<br>";echo "<br>";
    echo "El salario medio de Sales es " . ($sumSales /$sales); 

    echo "<br>";echo "<br>";
    $nuevoArr = [];
    
    foreach ($employees as $x) {
        
        if($x["department"] == "IT"){
               $nuevoArr[] = $x["name"];
        }
    }
    sort($nuevoArr);
    echo "<ul>";
    foreach($nuevoArr as $x){
    echo "<li>";    
    echo $x;
    echo "</li>";  
    }
    echo "</ul>"

    ?>
</body>

</html>