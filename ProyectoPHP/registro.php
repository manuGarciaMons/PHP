<?php 

if (isset($_POST)) {
    require_once 'includes/conexion.php';
session_start();

    // recoger los valores del formulario de registro
    $nombre =  isset($_POST['nombre']) ? $_POST['nombre'] : false;
    $apellidos = isset($_POST['apellidos']) ? $_POST['apellidos'] : false;
    $email = isset($_POST['email']) ? $_POST['email'] : false;
    $password = isset($_POST['password']) ? $_POST['password'] : false;


    // Array de errores
    $errores = array();

    // validar los datos antes de guardarlos en la base de datos

    // validar campo Nombre 
    if (!empty($nombre) && !is_numeric($nombre) && !preg_match("/[0-9]/", $nombre) ) {
       $nombre_validado = true;
    }else{
        $nombre_validado= false;
        $errores['nombre'] = "El nombre no es valido";
    }

    // validar campo apellidos
    if (!empty($apellidos) && !is_numeric($apellidos) && !preg_match("/[0-9]/", $apellidos) ) {
        $apellidos_validado = true;
     }else{
         $apellidos_validado= false;
         $errores['apellidos'] = "Los apellidos no son validos";
     }

     // validar el email
    if (!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $email_validado = true;
     }else{
         $email_validado= false;
         $errores['email'] = "El email no es valido";
     }

      // validar la password
    if (!empty($email)) {
        $password_validado = true;
     }else{
         $password_validado= false;
         $errores['password'] = "La contraseña esta vacia";
     }

     $guardar_usuario = false;
     if (count($errores) ==0) {
         $guardar_usuario == true;

         // cifrar la contraseña
         $password_segura = password_hash($password, PASSWORD_BCRYPT, ['cost' =>4]);
        // insertar usuarios en la base de datos

        $sql = "INSERT INTO usuarios VALUES(NULL, '$nombre', '$apellidos', '$email', '$password_segura', CURDATE());";
        $guardar = mysqli_query($db, $sql);
       
        if ($guardar) {
            $_SESSION['completado'] = "El registro se ha completado con exito";
        }else{
            $_SESSION['errores']['general']= "Fallo al guardar el usuario";
        }



     }else{
        $_SESSION['errores'] = $errores;
        
     }
}

header('location: index.php');



?>