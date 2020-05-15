<?php
namespace MisClases;
class Categoria{

    public $nombre;
    public $descripcion;

    public function __construct()
    {
        $this->nombre= "Accion";
        $this->descripcion= "Categiria enfocada a las reviews de accion";
    }
}