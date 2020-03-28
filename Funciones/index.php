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


function calculadora($numero1, $numero2, $negrita = true){
    // conjunto de instrucciones a ejecutar 
    $suma = $numero1 + $numero2;
    $resta = $numero1 - $numero2;
    $multipicacion = $numero1 * $numero2;
    $division = $numero1 / $numero2;

    $cadena_texto = " ";

    if ($negrita) {
        $cadena_texto.= "<h1>";
    }

    $cadena_texto.= "Suma:  $suma <br/>";
    $cadena_texto.= "Resta: $resta   <br/>";
    $cadena_texto.= "Multiplicacion:  $multipicacion <br/>";
    $cadena_texto.= "Division: $division  <br/>";
    $cadena_texto.= "<hr/>";


    return $cadena_texto;
}

echo calculadora(123,123);
echo calculadora(12,123);
echo calculadora(123,13);


function devuelveElNombre($nombre){
    return "El ombre es: $nombre";
}

echo devuelveElNombre("Manuela Garcia");
?>