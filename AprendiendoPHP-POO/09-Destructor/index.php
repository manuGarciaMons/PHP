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

    public function __destruct()
    {
        // TODO: Implement __destruct() method.
        echo "Destruyendo el objeto";
    }

}

$usuario = new Usuario();

for ($i =0; $i<=200; $i++){
    echo $i. "<br/>";
}

