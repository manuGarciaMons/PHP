<?php

class Persona{

    private $nombre;
    private $edad;
    private $cuidad;

    public function __construct($nombre, $edad,$cuidad)
    {
        $this->nombre= $nombre;
        $this->edad= $edad;
        $this->cuidad= $cuidad;
    }
    // cuando no existe un metodo
    public function __call($name, $arguments)
    {
         $prefix_metodo = substr($name, 0,3);
         if ($prefix_metodo== "get"){
            $nombre_metodo= substr(strtolower($name),3);

            if (!isset($this->$nombre_metodo)){
                return "El metodo que estas invocando no existe";
            }
                // $this->nombre;
            return $this->$nombre_metodo;
         }else{
            return "El metodo que estas invocando no existe";
         }

    }
}
$persona = new Persona("Manuela", 66, "Bogota");
echo $persona->getNombre();