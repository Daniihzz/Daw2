<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>EJERCICIO 2</h3>
    <?php
    function basicStatistics(...$tot)
    {
        if (count($tot) > 0) {
            $negativos = 0;
            $odds = [];
            foreach ($tot as $x) {
                if ($x < 0)
                    $negativos++;
                if ($x % 2 != 0)
                    $odds[] = $x;
            }

            return [
                "sum" => array_sum($tot),
                "max" => max($tot),
                "min" => min($tot),
                "avg" => array_sum($tot) / count($tot),
                "odd" => $odds,
                "neg" => $negativos
            ];
        } else {
            return false;
        }
    }

    function operations($numbers, $operation = "order", $incremental = true)
    {
        switch ($operation) {
            case "order":
                if ($incremental) {
                    sort($numbers);
                    $total = $numbers;
                } else {
                    rsort($numbers);
                    $total = $numbers;
                }
                break;
            case "sum":
                $total = array_sum($numbers);
                break;
            case "product":
                $total = array_product($numbers);
                break;
        }
        return $total;
    }

    ?>

</body>

</html>