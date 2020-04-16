<?php

/**
 * variables locales : se definen dentro de una funcion 
 * y no pueden ser usadas fuera de la función, solo estan 
 * disponibles dentro. A no ser que se haga un return
 * 
 * 
 * variables globales: las que se declran dentro de una funcion y estan disponibles
 * dentro y fuera de las funciones 
 */

// variable global
 $frase = "Ni los genios son tan genios, ni los mediocres tan mediocres";
 function holaMundo(){
     global $frase;
     echo "<h1> $frase </h1>";


     $year = 2019;
     echo "<h1> $year </h1>";
     return $year;
 }


 echo $year;
  holaMundo();


   //funciones variables 


   function buenosDias(){
       return  "Hola bueos dias :";
   }


   function buenasTardes(){
        return "buenas tardes";
   }

   function buenasNoches(){
       return "te vas a dormir  ya ";
   }

    $horario = "buenasNoches";
    echo  $horario();

    
?>