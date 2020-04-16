<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario PHPh</title>
</head>
<body>
    <h1> formulario en php</h1>
    <form action="recibir.php" method="post">
        <p>
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="">
        </p>
        <p>
            <label for="apellidos">Apellidos</label>
            <input type="text" name="apellidos" id="">
        </p>

        <input type="submit" value="Enviar Datos">
    </form>

</body>
</html>