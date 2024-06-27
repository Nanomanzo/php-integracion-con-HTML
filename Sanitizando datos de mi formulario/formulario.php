<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario por Post</title>
</head>
<body>
    <form action="server.php" method="post">
         <label for="nombre">Nombre: </label>
         <input type="text" name="nombre" id="nombre">

         <label for="username">username</label>
         <input type="text" name="username" id="username">

         <label for="correo">correo</label>
         <input type="text" name="correo" id="correo">

         <label for="edad">edad</label>
         <input type="text" name="edad" id="edad">

        <button type="submit">Mandar formulario</button>
    </form>
</body>
</html>