<?php

require_once 'Autoload.php';

$usuario = new Usuario();
echo $usuario->nombre;

$categoria = new Categoria();
$entrada = new Entrada();

use MisClases\Usuario, MisClases\Categoria, MisClases\Entrada;

class Principal{
    public $usuario;
    public $categoria;
    public $entrada;



    public function __construct()
    {
        $this->usuario= new Usuario();
    }

    /**
     * @return Usuario
     */
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * @param Usuario $usuario
     * @return Principal
     */
    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCategoria()
    {
        return $this->categoria;
    }

    /**
     * @param mixed $categoria
     * @return Principal
     */
    public function setCategoria($categoria)
    {
        $this->categoria = $categoria;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEntrada()
    {
        return $this->entrada;
    }

    /**
     * @param mixed $entrada
     * @return Principal
     */
    public function setEntrada($entrada)
    {
        $this->entrada = $entrada;
        return $this;
    }

    function informacion(){
        echo __TRAIT__;
    }


}
$principal = new Principal();
$principal->informacion();
var_dump($principal->usuario);

// comprobar si existe una clase
$clase =class_exists('MisClases\Usuario');
if($clase){
    echo "<h1> La clase si existe </h1>";
}else{
    echo "<h1> La clase No existe </h1>";
}