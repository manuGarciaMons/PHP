<?php 

//Herencia: posibilidad de compartir atributos metodos entre clases

class Persona{

    public $nombre;
    public $apellidos;
    public $altura;
    public $edad;

    /**
     * @return mixed
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * @return mixed
     */
    public function getAltura()
    {
        return $this->altura;
    }

    /**
     * @return mixed
     */
    public function getApellidos()
    {
        return $this->apellidos;
    }

    /**
     * @return mixed
     */
    public function getEdad()
    {
        return $this->edad;
    }

    /**
     * @param mixed $edad
     * @return Persona
     */
    public function setEdad($edad)
    {
        $this->edad = $edad;
        return $this;
    }

    /**
     * @param mixed $apellidos
     * @return Persona
     */
    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;
        return $this;
    }

    /**
     * @param mixed $nombre
     * @return Persona
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
        return $this;
    }

    /**
     * @param mixed $altura
     * @return Persona
     */
    public function setAltura($altura)
    {
        $this->altura = $altura;
        return $this;
    }

    public function hablar(){
        return" Estoy hablando ";

    }

    public function caminar(){
        return" Estoy caminando ";

    }

}
 class  informatico extends  Persona {

    public $lenguajes;
    public $experienciaProgramador;


    public function  __construct(){

        $this->lenguajes= "HTML, CSS, JS";
        $this->experienciaProgramador= 10;
    }


     public function programa(){
         return" soy programador ";

     }

     public function RepararOrdenador(){
         return" Reparar ordenadores ";

     }

     public function hacerOfimatica(){
         return" Estoy escribiendo en word";

     }

     public function sabeLenguajes($lenguajes){
         $this->lenguajes= $lenguajes;

         return $this->lenguajes;
     }



 }

 class TecnicoRedes extends informatico{

    public $auditarRedes;
    public $experienciaRedes;


    public function  __construct()
    {

        parent::__construct();
        $this->auditarRedes = "Experto";
        $this->experienciaRedes= 5;
    }

     public function auditoria(){
        return "Estoy aunditando una red";
    }
 }