<?php 
/***
 * 
 * es un fichero que se almacena en el ordenador del 
 * usuario que visita la web; con el fin de recordar datos o rastrear
 * el comportamiento del mismo en la web.
 * 
 */

 // crear cookie

 //setcookie("bombre", "valor que solo puede ser texto", caducidad, tuta, dominio);

// cookie basica 
setcookie("micookie", "valor de mi galleta");

// cookie con expiracion
setcookie("unYear", "Valor de mi coookie de 356 dias", time()+(60*60*24*365));

header('location:ver_cookies.php' );

?>
