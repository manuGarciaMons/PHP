<?php

$error = "faltan_valores";
if (empty($_POST['nombre']) && empty($_POST['apellidos']) &&
empty($_POST['edad']) && empty($_POST['email']) &&
empty($_POST['password']) ) {
    $error = "ok";

   $nombre = $_POST['nombre'];
   $apellidos =$_POST['apellidos'];
   $edad = $_POST['edad'];
   $email = $_POST['email'];
   $password = $_POST['´password'];

   
}else{
    $error = "faltan_valores";
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
    
</body>
</html>