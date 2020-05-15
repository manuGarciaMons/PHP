<?php

abstract class Ordenador{

    public $encendido;

   abstract public function  encender();

    public function  apagar(){
        $this->encendido= false;
    }

}

class PCAsus extends Ordenador {
    public $software;

    public function arrancarSoftware(){
        $this->software= true;
    }
    public function encender()
    {
        // TODO: Implement encender() method.
        $this->encender= true;
    }
}
$ordenador = new PCAsus();
$ordenador->arrancarSoftware();
$ordenador->encender();
$ordenador->apagar();
