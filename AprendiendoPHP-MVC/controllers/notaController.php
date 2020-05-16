<?php

class NotaController{
    public function  listar(){
        require_once 'models/notaController.php';

        $nota = new Nota();
        $nota->setNombre("hola");
        $nota->setContenido("Hola mundo php mvc");
        require_once 'views/nota/listar.php';
    }

    public function  crear(){

    }

    public function borrar(){

    }


}
