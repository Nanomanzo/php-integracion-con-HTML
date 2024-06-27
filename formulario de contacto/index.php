<?php

require('mail.php');

function validate($name, $email, $subject, $message, $form){
    return !empty($name) && !empty($message) && !empty($email) && !empty($subject);
}

$status = '';

if (isset($_POST['form'])) {
    if (validate(...$_POST)) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        $body = "$name <$email> te envia el siguiente mensaje: <br><br> $message";

        //mandare el correo
        sendMail($subject, $body, $email, $name, true);

        $status = 'success';
    } else {
        $status = 'danger';

    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <form action="./" method="post">

        <?php if($status == 'danger'): ?>
            <div class="alert danger">
                <span><i>⚠️</i>Surgio un problema</span>
            </div>
        <?php endif; ?>


        <?php if($status == 'success'): ?>
            <div class="alert success">
                <span><i>✅</i>Mensaje enviado con exito</span>
            </div>
        <?php endif; ?>
    


        <div class="title">
            <h1>Contactanos</h1>
        </div>

        <div class="input-groups">
            <div class="input-group">
                <label for="name">Nombre: </label>
                <input type="text" name="name" id="name">
            </div>
    
            <div class="input-group">
                <label for="email">Correo: </label>
                <input type="email" name="email" id="email">
            </div>
    
            <div class="input-group">
                <label for="subject">Asunto: </label>
                <input type="text" name="subject" id="subject">
            </div>
    
    
            <div class="input-group">
                <label for="message">Nombre: </label>
                <textarea name="message" id="message"></textarea>
            </div>
        </div>
        
        <div class="button-container">
            <button name="form" type="submit">Enviar</button>
        </div>


    </form>
</body>
</html>