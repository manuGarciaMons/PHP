<?php
// inciar la sesion y la conexion a la DB
require_once 'includes/conexion.php';


// recoger datos del formulario
if (isset($_POST)) {

    // borrar sesion antigua 
    if(isset($_SESSION['error_login'])){
        session_unset($_SESSION['error_login']);
    }

    // recoger datos del formulario
    $email = trim($_POST['email']);
    $password = $_POST['password'];

    $sql = "SELECT * FROM usuarios WHERE email = '$email'";
    $login = mysqli_query($db, $sql);

    if ($login && mysqli_num_rows($login) == 1) {
        $usuario = mysqli_fetch_assoc($login);

        $verify =  password_verify($password, $usuario['password']);

        if ($verify) {

            $_SESSION['usuario']= $usuario;

            
        } else {
            
            $_SESSION['error_login']= "login incorrecto";

        }
    } else {

        $_SESSION['error_login']= "login incorrecto";
    }
}

header('location:index.php');
// comprobar la contraseña

// consultar las credenciales del usuario

// utilizar 
