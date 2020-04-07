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


// copiar el fichero
copy('fichero_texto.txt', 'fichero.txt') or die("error copiar");

// renombrar un fichero 
rename('fichero_copiado.txt', 'archivito_recopiadito.txt' );

// eliminar fichero

unlink('fichero_texto.txt') or die ('error al borrar el archivo');


// si existe un archivo 
if (file_exists('fichero_texto.txt')) {
    echo "El archivo existe";
}else{
    echo "El archivo no existe";
}