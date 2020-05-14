<?php 

// POO En PHP

//definir una clase 
class Coche{
    // atributos o propiedades(Variables)
    public $color = "rojo";
    public $modelo ="Aventador";
    public $velocidad =300;
    public $marca= "Ferrari"; 
    public $caballaje =500;
    public $plazas =2;

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


}
$coche = new Coche();
echo $coche->getVelocidad();

$coche->setColor("amarillo");
echo "el color del coche es: ".$coche->getcolor();

$coche->acelerar();
$coche->acelerar();
$coche->acelerar();
$coche->acelerar();
$coche->frenar();

echo "Velocidad del coche: ". $coche->getVelocidad();