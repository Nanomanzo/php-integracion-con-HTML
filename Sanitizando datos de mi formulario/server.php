<?php

echo "<pre>";
print_r($_POST);
echo "</pre>";

$nombre = htmlentities($_POST['nombre']);
$username = htmlentities($_POST['username']);
$correo = htmlentities($_POST['correo']);
$edad = htmlentities( $_POST['edad']);

$onlyword = preg_replace("/\d/", "", $username);
$correo  = filter_var($correo, FILTER_SANITIZE_EMAIL);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>userrname:</p>
    <p><?= $username ?></p>

    <p>userrname sin numeros:</p>
    <p><?= $onlyword ?></p>
</body>
</html>