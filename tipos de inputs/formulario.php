<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="server.php" method="post" enctype="multipart/form-data">

        <!-- input simple -->
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre">

        <!-- input array -->
        <label>personas</label>
        <input type="text" name="personas[]" id="">
        <input type="text" name="personas[]" id="">
        <input type="text" name="personas[]" id="">


        <!-- input array asociativos-->
        <label for="persona[nombre]">Nombre</label>
        <input type="text" name="persona[nombre]" id="">
        <label for="persona[email]">email</label>
        <input type="email" name="persona[email]" id="">
        <label for="persona[edad]">edad</label>
        <input type="number" name="persona[edad]" id="">


        <!-- checkbox -->
        <input type="checkbox" name="list1">
        <input type="checkbox" name="list2" value="este valor fue clicado">
        <input type="checkbox" name="list3">

        <!-- radios -->
        <input type="radio" name="pais" value="mx" id="mexico">
        <label for="mexico">mexico</label>
        <input type="radio" name="pais" value="co" id="colombia">
        <label for="colombia">colombia</label>
        <input type="radio" name="pais" value="pe" id="peru">
        <label for="peru">peru</label>


        <!-- multiples archivos -->
        <label for="galeria">Carga tus imagenes</label>
        <input type="file" name="galeria[]" id="galeria" multiple>

        <button type="submit">Mandar formulario</button>
    </form>
</body>

</html>