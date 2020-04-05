<?php
/**
 * 
 * EJERCICIO 1: hacer un programa en php que tenga
 * 8 numeros enteros y que haga lo siguiente
 * - recorrerlo y mostrarlo
 * - ordenarlo y mostrarlo 
 * - mostrar su longitud
 * - buscar algun elemento (Buscar por get)
 * 
 */

 // funciones
 function mostrarArray($numeros){
     $resultado = "";
    foreach ($numeros as $numero) {
        // resultado = $resultado.$numero. "<br/>";
        $resultado.= $numero. "<br/>";
    }
    return $resultado;
 }
 // crear array

 $numeros = array(12,1,232,323,323,329,465,3);


 // recorrer y mostrar 
 echo  "<h1> Recorrer y mostrar </h1>";
 echo mostrarArray($numeros);

 // ordenarlo y mostrarlo
 echo "<h1> Ordenar y mostrar </h1>";
 sort($numeros);
 echo mostrarArray($numeros);
 
// mostrar su longitud
echo "<h1> Numero total de elementos</h1>";
echo count($numeros);

// Busqueda en el array

if (isset($_GET['numero'])) {
    # code...

$busqueda = $_GET['numero'];
echo "<h1> Buscar en el array el numero $busqueda</h1>";
$search =array_search($busqueda, $numeros);
var_dump($search);
if (!empty($search)) {
    echo "<h4> El numero buscado existe en el array, en el indice: $search </h4>";
}else{
    echo "<h4> El numero buscado No existe en el array </h4>";
}
}

