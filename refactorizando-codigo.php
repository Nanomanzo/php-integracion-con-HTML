<?php
$tabla_del_9 = [];

for ($i = 1; $i <= 10; $i++) { 
    $resultado = 9 * $i;
    $texto = "9 x $i = $resultado";
    array_push($tabla_del_9, $texto);
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>tabla del 9 (asi no)</h1>
    <ul>
        <?php

        for ($i = 0; $i < 10; $i++) {
            echo "<li>" . "9 x " . ($i + 1) . " = " . (9 * ($i + 1)) . "</li>";
        }

        ?>
    </ul>

    <h1>tabla del 9 (asi si)</h1>
    <ul>
        <?php foreach ($tabla_del_9 as $resultado): ?>
            <li><?= $resultado ?></li>
        <?php endforeach; ?>
    </ul>
</body>

</html>