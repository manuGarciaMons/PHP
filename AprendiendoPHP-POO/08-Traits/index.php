<?php

trait Utilidades{
    public function mostrarNombre(){
        echo  "<h1> El nombre es: ".$this->nombre. "</h1>";
    }
}

class Coche{

    public $nombre;
    public $marca;

    /**
     * @return mixed
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * @param mixed $nombre
     * @return Coche
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMarca()
    {
        return $this->marca;
    }

    /**
     * @param mixed $marca
     * @return Coche
     */
    public function setMarca($marca)
    {
        $this->marca = $marca;
        return $this;
    }

    use Utilidades;

}

class Persona{

    public $nombre;
    public $apellidos;

    /**
     * @return mixed
     */
    public function getNombre()
    {
        return $this->nombre;
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
     * @return mixed
     */
    public function getApellidos()
    {
        return $this->apellidos;
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

    use Utilidades;
}

class VideoJuego{

    public $nombre;
    public $anio;

    /**
     * @return mixed
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * @param mixed $nombre
     * @return VideoJuego
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAnio()
    {
        return $this->anio;
    }

    /**
     * @param mixed $anio
     * @return VideoJuego
     */
    public function setAnio($anio)
    {
        $this->anio = $anio;
        return $this;
    }

    use Utilidades;

}

$coche = new Coche();
$coche->setNombre("Ferrari");
$coche->mostrarNombre();

$persona = new Persona();
$persona->setNombre("Manuela");
$persona->mostrarNombre();

$videoJuego = new VideoJuego();
$videoJuego->setNombre("Fortnite");
$videoJuego->mostrarNombre();
