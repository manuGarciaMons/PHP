<?php 

/**
 * FUNCIONES 
 * Una funcion es un conjutno de instrucciones agrupadas
 * bajo un nombre concreto y que pueden 
 * reutilizarse solamente 
 * invocando a la funcion tantas veces como sea 
 * necesario
 * 
 * function nombreFuncion ($parametro){
 *      conjunto de instrucciones
 * }
 * 
 * nombreFuncion($parametro);
 */

// ejemplo


function muestraNombres(){
    echo "Manuela Garcia";
    echo "Nora Garcia";
    echo "Nancy Garcia";
    echo "Andrea Garcia";

}
muestraNombres();

function tabla($numero){
    echo "<h3> Tabla de multiplicar del numero: $numero </h3>";

    for ($i=1; $i <=10 ; $i++) { 
        $operacion = $numero*$i;
        echo " $numero x $i = $operacion <br/>";
    }
}
if (isset($_GET['numero'])) {
    tabla($_GET['numero']);
}else{
    echo "No hay numero para sacar la tabla";
}



for ($i=0; $i <=10 ; $i++) { 
    tabla($i);
}


function calculadora($numero1, $numero2){
    // conjunto de instrucciones a ejecutar 
    $suma = $numero1 + $numero2;
    $resta = $numero1 - $numero2;
    $multipicacion = $numero1 * $numero2;
    $division = $numero1 / $numero2;
    echo "Suma:  $suma <br/>";
    echo "Resta: $resta   <br/>";
    echo "Multiplicacion:  $multipicacion <br/>";
    echo "Division: $division  <br/>";
    echo "<hr/>";
}

calculadora(123,123);
?>