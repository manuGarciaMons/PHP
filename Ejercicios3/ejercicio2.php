<?php 

/**
 * 
 * una funcion 
 * la funcion debe validar un email con filter var
 * recoger una variable por get y validarla
 * mostrar el resultado
 */


 function validarEmail($email){
     $status = "No valido";
     if (!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
         $status = "valido";
     }
     return $status;
 }

 if (isset($_GET['email'])){
     echo validarEmail($_GET['email']);
     
 }else{
    echo "pasa por GET un email..";
 }
 ?>