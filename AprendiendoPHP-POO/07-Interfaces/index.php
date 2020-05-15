<?php

interface Ordenador{
    public function encender();
    public  function apagar();
    public function reiniciar();
    public function desfragmentar();
    public function detectarUSB();

}

class iMac implements Ordenador {

    public $modelo;

    /**
     * @return mixed
     */
    public function getModelo()
    {
        return $this->modelo;
    }

    /**
     * @param mixed $modelo
     * @return iMac
     */
    public function setModelo($modelo)
    {
        $this->modelo = $modelo;
        return $this;
    }
    public function encender()
    {
        // TODO: Implement encender() method.
    }

    public function apagar()
    {
        // TODO: Implement apagar() method.
    }

    public function reiniciar()
    {
        // TODO: Implement reiniciar() method.
    }

    public function desfragmentar()
    {
        // TODO: Implement desfragmentar() method.
    }

    public function detectarUSB()
    {
        // TODO: Implement detectarUSB() method.
    }

}

$maquintosh = new iMac();
$maquintosh->setModelo("Mackbook PRO 2020");
echo $maquintosh->getModelo();