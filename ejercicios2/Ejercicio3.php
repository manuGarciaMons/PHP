<?php 
/**
 * Ejercicio 3
 * Programa que compruebe si una variable esta vacia 
 * y si esta vacia rellenarla con texto en minusculas 
 * y mostrarlo en mayusculas y negrita
 * 
 * 
 */

 $texto  = "";

 if (empty($texto)) {
     $texto = "hola to soy el relleno de la variable texto";
     $textoMayus =strtoupper($texto);

     echo "<strong> $textoMayus </strong>";
 }else{
     echo "la variable tiene este contenidp dentro: ". $texto;
 }
?>