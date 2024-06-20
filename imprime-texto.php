<?php
$nombre = 'Alejandro'
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>imprime texto y etiquetas con PHP</title>
</head>
<body>
    <?php
    echo "<b>Hola, estoy aprendiendo a integrar PHO con HTML</b>"
    ?>
    <?= "<i> Esta es otra forma </i>";?>

    <h1>Hola <?=$nombre?></h1>

</body>
</html>