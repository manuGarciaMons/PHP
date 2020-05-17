<?php
require_once 'ModeloBase.php';
class Nota extends ModeloBase {
    public $nombre;
    public $contenido;


    public function  __construct()
    {
        parent::__construct();
    }

    /**
     * @return mixed
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * @param mixed $nombre
     * @return Nota
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getContenido()
    {
        return $this->contenido;
    }

    /**
     * @param mixed $contenido
     * @return Nota
     */
    public function setContenido($contenido)
    {
        $this->contenido = $contenido;
        return $this;
    }

    public function conseguirTodos(){
        return "Sacando todos los usuarios";
    }



}
