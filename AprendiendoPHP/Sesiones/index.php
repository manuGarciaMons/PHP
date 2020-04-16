<?php 
/**
 * 
 * sesiones: almacenar y persistir datos del usuario
 * mientras que navega en un sitio web hasta que cierra sesión o 
 * cierra el navegador.
 * 
 */


 // inicial la sesion

 session_start();

 $variable_normal = "soy una cadena de texto";
 $_SESSION['variable persistente']= "hola soy una sesion activa";

 echo $variable_normal."<br/>";
 echo $_SESSION['variable'];

?>