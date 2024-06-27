<?php

$nombre = htmlentities($_POST['nombre']);
$username = htmlentities($_POST['username']);
$correo = htmlentities($_POST['correo']);
$edad = htmlentities( $_POST['edad']);


$is_float = filter_var($edad, FILTER_VALIDATE_FLOAT, FILTER_FLAG_ALLOW_THOUSAND);
$is_int = filter_var($edad, FILTER_VALIDATE_INT);
$is_ip = filter_var("127.0.0.1", FILTER_VALIDATE_IP);
$is_url = filter_var("https://www.platzi.com", FILTER_VALIDATE_URL);
$is_email = filter_var($correo, FILTER_VALIDATE_EMAIL);


echo("</pre>");
var_dump($is_float);
var_dump($is_int);
var_dump($is_ip);
var_dump($is_url);
var_dump($is_email);
echo("<pre>");