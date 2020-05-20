<?php

require_once 'models/usuario.php';

class UsuarioController
{
    public function index()
    {
        echo "controlador Usuario Accion index";
    }

    public  function registro(){
        require_once 'views/usuario/registro.php';

    }

    public function save(){
        if(isset($_POST)){
            $usuario = new Usuario();
            $usuario->setNombre($_POST['nombre']);
            $usuario->setApellidos($_POST['apellidos']);
            $usuario->setEmail($_POST['email']);
            $usuario->setPassword($_POST['password']);

            $save =$usuario->save();
            if ($save){
                echo "Registro completado";
            }else{
                echo "No se pudo completar el registro";
            }

        }

    }

}