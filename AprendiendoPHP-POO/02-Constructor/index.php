<?php
require_once 'Coche.php';

$coche = new Coche("Amarillo", "Renault ", "Clio", 150, 200,5);

echo $coche->mostrarInformacion($coche);