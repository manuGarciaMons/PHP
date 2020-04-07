<?php

$error = "faltan_valores";
if (
    !empty($_POST['nombre']) && !empty($_POST['apellidos']) &&
    !empty($_POST['edad']) && !empty($_POST['email']) &&
    !empty($_POST['password'])
) {
    $error = "ok";

    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $edad = (int) $_POST['edad'];
    $email = $_POST['email'];
    $password = $_POST['´password'];

    // validar el nombre 
    if (!is_string($nombre) || !preg_match("/[0-9]+/", $nombre)) {
        $error = "nombre";
    }
    // validar los apellidos 
    if (!is_string($apellidos) || !preg_match("/[0-9 ]+/", $apellidos)) {
        $error = "nombre";
    }
    // validar la edad 
    if (!is_int($edad) || !filter_var($edad, FILTER_VALIDATE_INT)) {
        $error = "edad";
    }
    // validar el email 
    if (!is_string($email) || !filter_var($edad, FILTER_VALIDATE_EMAIL)) {
        $error = "email";
    }
    // validar la edad 
    if (empty($password) || strlen($password) > 5) {
        $error = "password";
    }
} else {
    $error = "faltan_valores";
}
if ($error != 'ok') {
    header("Location: index.php?error=$error");
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>validacion de formularios php</title>
</head>

<body>
    <?php
    if ($error == 'ok') : ?>

        <h1>Datos validados correctamente </h1>
        <p><?= $nombre ?></p>
        <p><?= $apellidos ?></p>
        <p><?= $edad ?></p>
        <p><?= $email ?></p>

    <? endif;
    ?>
</body>

</html>