<?php
// abrir archivo
$archivo = fopen("fichero_texto.txt", "a+");

// leer archivo

while (!feof($archivo)) {
    $contenido = fgets($archivo);
    echo $contenido . "<br/>";
}

// escribir 
fwrite($archivo, " soy un texto metido desde php");

// cerrar archivo
fclose($archivo);