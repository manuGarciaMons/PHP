<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validacion de formularios PHP</title>
</head>

<body>
    <h1>Validar formularios en php</h1>

    <?php

    if (isset($_GET['error'])) {
        $error = $_GET['error'];
        if ($error == 'faltan_valores') {
            echo '<strong  style="color:red"> Introduce todos los datos en todos los campos del formulario  </strong> ';
        }
        if ($error == 'nombre') {
            echo '<strong  style="color:red"> Introduce bien el nombre  </strong> ';
        }
        if ($error == 'apellidos') {
            echo '<strong  style="color:red"> Introduce bien los apellidos  </strong> ';
        }
        if ($error == 'edad') {
            echo '<strong  style="color:red"> Introduce una edad correcta  </strong> ';
        }
        if ($error == 'email') {
            echo '<strong  style="color:red"> El correo es erroneo  </strong> ';
        }
        if ($error == 'password') {
            echo '<strong  style="color:red"> Introduce una contraseña de mas de 5 caracteres </strong> ';
        }
    }
    ?>
    <form action="procesar_formulario.php" method="post">

        <label for="nombre">Nombre</label> <br />
        <input type="text" name="nombre" id="" required= "required" > <br />

        <label for="apellidos">Apellidos</label> <br />
        <input type="text" name="apellidos" id="" required= "required"> <br />

        <label for="edad">Edad</label> <br />
        <input type="number" name="edad" id="" required= "required"> <br />

        <label for="email">Email</label> <br />
        <input type="email" name="email" id="" required= "required"> <br />

        <label for="password">Password</label> <br />
        <input type="password" name="password" id="" required= "required" minlength="5"> <br />

        <input type="submit" value="Enviar"> <br/>
    </form>
</body>

</html>