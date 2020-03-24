<?php

//BUCLE FOR 

/**
 * for (expresion inicial, condición, incrementar contador){
 *  bucle de instrucciones
 * }
 */

 $resultado =0;
 for ($i=0; $i <=100 ; $i++) { 
     $resultado = $resultado + $i;
     echo "<p> $resultado </p>";
 }
 echo "<h1> El resultad es: $resultado</h1>";

 // ejemplo de la tabla de multiplicar 


 if (isset($_GET['numero'])) {
    $numero = (int)$_GET['numero']; // cambiar el tipo de dato
    
}else{
    $numero = 1;
}
    
echo "<h1> Tabla de multiplicar del numero $numero </h1>";

$contador =1;
for ($contador=1; $contador <=10 ; $contador++) { 

    if ($numero ==45) {
        echo "No se pueden mostrar estas operaciones prohibidas";
        break;
    }
    echo " $numero x $contador = ". ($numero*$contador). "<br/>";
}


?>