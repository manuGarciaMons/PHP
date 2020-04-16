<?php

/**
 * imprima por pantalla los cuadrados de los primeros 40 numeros naturales
 * (Un numero multiplicado por si mismo)
 */

// con while
 $contador = 0;
 while ($contador <= 40) {
     $cuadrado = $contador*$contador;
     echo "<h3>El cuadrado de  $contador es : $cuadrado</h3>";

 $contador ++;
 }

 // con for 

 for ($contador=0; $contador <=40 ; $contador++) { 
    $cuadrado = $contador*$contador;
    echo "<h3>El cuadrado de  $contador es : $cuadrado</h3>";
 }

 

?>