<?php

require_once 'clases.php';

$persona = new Persona();
$persona->setNombre('Daniel');

$informatico = new informatico();
$informatico->setAltura(1.9);


 $tecnico = new TecnicoRedes();
 $tecnico->devuelveElNombre("Daniel");