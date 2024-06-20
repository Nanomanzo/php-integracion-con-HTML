<?php
$se_hablo_de_bruno = true;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionales</title>
</head>

<body>
    <h1>acepotable</h1>
    <?php if ($se_hablo_de_bruno) { ?>
        <b>🙃</b>
    <?php } else { ?>
        <i>❤️</i>
    <?php } ?>



    <h1>modo correcto</h1>
    <?php if ($se_hablo_de_bruno) : ?>
        <b>🙃</b>
    <?php else : ?>
        <i>❤️</i>
    <?php endif; ?>



</body>

</html>