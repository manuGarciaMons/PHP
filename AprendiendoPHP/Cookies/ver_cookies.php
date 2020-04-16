<?php

/**
 * para mostrar el valor de las cookies, tengo que usar 
 * $_COOKIE, una variable superglobal,
 * es un array asociativo.
 * 
 */

 if (isset($_COOKIE['micookie'])) {
    echo "<h1>". $_COOKIE['micookie']."</h1>";
 }else{
     echo "No existe la cookie";
 }


 if (isset($_COOKIE('unYear'))) {
    echo "<h1>". $_COOKIE['unYear']."</h1>";
}else{
    echo "No existe la cookie";
 }

 ?>
<a href="crear_cookies.php">crear las Galletas</a>
<a href="borrar_cookies.php">borrar las Galletas</a>