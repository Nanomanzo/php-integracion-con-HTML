<?php
$usuarios = ['alejandro', 'maria', 'juan'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>



    <ul>
        <?php for ($i = 0 ; $i < 3; $i++): ?>
            <li> <?= $i + 1   ?> </li>
        <?php endfor; ?>


        <?php $b = 0; ?>
        <?php while ($b < 4): ?>
            <li>cosa</li>
            <?php $b++; ?>
        <?php endwhile; ?>

        
        <?php foreach ($usuarios as $usuario): ?>
            <li><?=$usuario  ?></li>
        <?php endforeach; ?>


    </ul>


</body>

</html>