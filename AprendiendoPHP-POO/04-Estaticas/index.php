<?php
require_once 'Configuracion.php';

Configuracion::setColor("Blue");
Configuracion::setEntorno("Localhost");
Configuracion::setNewsletter(true);

 echo Configuracion::$color . '<br/>';
 echo Configuracion::$entorno . '<br/>';
 echo Configuracion::$newsletter . '<br/>';

 $configuracion = new Configuracion();
 $configuracion::$color= "rojo";
 echo $configuracion::color;
