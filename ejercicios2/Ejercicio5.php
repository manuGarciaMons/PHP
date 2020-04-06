<?php

/**
 * 
 * crear un array con el contenido de la tabla:
 * ACCION  AVENTURA   DEPORTES
 * GTA    ASSASING     FIFA 19
 * COD      CRASH        PES 19
 * PUGB     pRINCE OF    MOTO GP 19
 *           PERIA
 * 
 * Cada columna debe ir en un fichero separado
 */


$tabla = array(
    "ACCION " => array("GTA 5", "Call of Duty", "PUGB"),
    "AVENTURA " => array("ASSASINGN", "CRASH", "Pribce of Persia"),
    "DEPORTES" => array("FIFA 19", "PES 19", "MOTO GP 19")
);

var_dump($tabla);
$categorias = array_keys($tabla);

?>

<table border="1">
    <?php require_once 'Ejercicio5/Encabezados.php';?>
    <?php require_once 'Ejercicio5/primera.php';?>
    <?php require_once 'Ejercicio5/segunda.php';?>
    <?php require_once 'Ejercicio5/tercera.php';?>
    
</table>