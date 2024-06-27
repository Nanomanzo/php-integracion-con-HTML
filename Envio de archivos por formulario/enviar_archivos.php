<?php
//$_FILES: variable supoerglobal que contiene informacion en forma de array del archivo que estamos manipulando


echo "<pre>";
var_dump($_FILES);
echo "</pre>";


$base_name = $_FILES['image']['name'];
$image = $_FILES['image']['tmp_name'];
$ruta_a_subir = "images/$base_name";

move_uploaded_file($image, $ruta_a_subir);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <img src="<?= $ruta_a_subir ?>" alt="<?= $base_name ?>">
</body>
</html>