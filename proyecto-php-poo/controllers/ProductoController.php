<?php

require_once 'models/producto.php';

class ProductoController
{
    public function index()
    {
        // renderizar  vista
        require_once 'views/producto/destacados.php';
    }

    public function  gestion(){

        //Utils::isAdmin();
        $producto = new Producto();
        $productos = $producto->getAll();
        require_once 'views/producto/gestion.php';
    }
}
