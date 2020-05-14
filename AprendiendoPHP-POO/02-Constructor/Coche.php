<?php 

class Coche{
    // atributos o propiedades(Variables)
    public $color ;
    public $modelo ;
    public $velocidad ;
    public $marca; 
    public $caballaje;
    public $plazas;

    public function __construct($color, $marca, $modelo, $velocidad, $caballaje, $plazas)
    {
        $this->color = $color;
        $this->marca = $marca;
        $this->modelo =$modelo;
        $this->velocidad=$velocidad;
        $this->caballaje=$caballaje;
        $this->plazas=$plazas;
    }

    //Metodos
    public function getcolor(){
        // busca en esta clase la propiedad x
        return $this->color;
    }

    public function setColor($color){
        $this->color =$color;
    }

    public function acelerar(){
        $this->velocidad++;
    }

    public public function Frenar()
    {
        $this->velocidad--;
    }

    public function setModelo($modelo){
        $this->modeo = $modelo;
    }

    public function getVelocidad(){
        return $this->velocidad;
    }
    // obliga a pasar objetos del tipo que se pida
    public function mostrarInformacion(Coche $miObjeto){

        if(is_object(($miObjeto))){
        $informacion = "<h1>Informacion del coche </h1>";
        $informacion .= "Color: ".$miObjeto->color;
        $informacion .= "Modelo: ".$miObjeto->modelo;
        $informacion .= "Velocidad: ".$miObjeto->velocidad;
        }else{
            $informacion ="Tu dato es este: " .$miObjeto;
        }
        return $informacion;
    }


}