<?php

$cantantes =['Drake', 'tylor swift', 'jesse y joy', 'adele'];

asort($cantantes); // ordenar alfabeticamente a-z
arsort($cantantes); // ordenar alfabeticamente z-a
sort($cantantes); // ordenar alfabeticamente y tambien numeros
var_dump($cantantes);

$numeros = [1,4,3,5,3,2];
sort($numeros);

// añadir elementos a un array

$cantantes[] = 'chino y nacho'; 
array_push($cantantes, 'ed sheeran'); //agregar
array_pop($cantantes);  // eliminar el ultimo
unset($cantantes[2]); // eliminar el que quiera pasando el indice

// sacar elemento aleatorio de un array
array_rand($cantantes);

// dar una vuelta al array
array_reverse($cantantes);
array_reverse($numeros);

// buscar dentro de un array
$resultado = array_search('Drake', $cantantes);
var_dump($resultado);

// contar numero de elementos 
echo count($cantantes);

echo sizeof($cantantes);


?>