<?php

class Usuario
{

    public $nombre;
    public $email;

    /**
     * Usuario constructor.
     * @param $nombre
     * @param $email
     */
    public function __construct($nombre, $email)
    {
        $this->nombre = $nombre;
        $this->email = $email;
        echo "Creando el objeto";
    }

    public function __toString()
    {
        // TODO: Implement __toString() method.
        return "Hola,  {$this->nombre}, esta registrado con {$this->email}";
    }

    public function __destruct()
    {
        // TODO: Implement __destruct() method.
        echo "Destruyendo el objeto";
    }

}

$usuario = new Usuario();
echo $usuario;
echo $usuario->email;



