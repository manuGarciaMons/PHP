<?php 


/**
 * Array
 * Colección de datos/valores/variable
 * bajo un unico nombre y para acceder  a esos valores 
 * se puede usar un indice numero o alfanuumerico
 * 
 */

 $peliculas =array('batman', 'superman','señor de los anillos');
 var_dump($peliculas);
$cantantes =['Drake', 'tylor swift', 'jesse y joy'];
var_dump($cantantes);
echo $peliculas[0];
echo "<br/>";
echo $cantantes[1];

// recorrer un array con el buble for
echo "<h1> Listado de peliculas</h1>";
echo "<ul>";
for ($i=0; $i <count($peliculas); $i++) { 
    echo "<li>". $peliculas[$i]. "</li>";
}

echo "</ul>";

// recorrer con foreach
echo "<h1> Listado de cantantes</h1>";
echo "<ul>";
foreach ($cantantes as  $cantante) {
    echo  "<li> ". $cantantes . "</li>";
}
echo "</ul>";

?>