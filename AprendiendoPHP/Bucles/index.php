<?php

//BUCLE WHILE 
// Estructura de control que itera o repite la ejecucion de una serie de instruccione smuchas veces como sea necesario
 /*
 while(condicion){
     bloque de instrucciones
 }
 */$numero =0;

//  while ($numero <= 100) {
//      echo "<p> $numero/p>";
//      $numero ++;
//  }


while ($numero <= 100){
    echo $numero;

    if ($numero != 100) {
        echo ", ";
    }

    $numero++;
} 


//ejemplo 

if (isset($_GET['numero'])) {
    $numero = (int)$_GET['numero']; // cambiar el tipo de dato
    
}else{
    $numero = 1;
}
    
echo "<h1> Tabla de multiplicar del numero $numero </h1>";

$contador =1;
while ($contador <= 10) {
    echo " $numero x $contador = ". ($numero*$contador). "<br/>";
    $contador++;
}


echo "<hr/>";
//DO WHILE
// ejecitar la primera instruccion y entrar a validar las siguientes 
$contado =1;
$edad = 18;
do {
    echo "tienes acceso al locar privado $contador <br/>";
    $contador++;
} while ($edad >=18 && $contador <= 10);

?>