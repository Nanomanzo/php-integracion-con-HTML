<?php
    $uruarios =[

        array(
            'id' => 0,
            'username' => 'alejandro'
        ),

        array(
            'id' => 1,
            'username' => 'joes'
        ),

        array(
            'id' => 2,
            'username' => 'pancho'
        )

    ];


    $edad_de_pepito = 12;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <script>
        let users = JSON.parse('<?= json_encode($uruarios)  ?>')
        let edadDePepito = <?= $edad_de_pepito; ?>;
    </script>

    <script src="./index.js"></script>
</body>
</html>