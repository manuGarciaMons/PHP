<?php


/**
 * 
 * FUNCIONES PREDEFINIDAS DE PHP
 */
 // para debuguear
 $nombre = "Manuela Garcia";
 var_dump($nombre);

 // fechas actual
 echo date('d-m-Y');
echo "<br/>";
 // time timestamp
 echo time();
 echo "<br/>";

 // matematicas 
 echo "raiz cuadrada de 10". sqrt(10);
 echo "<br/>";

 //numero aleatorio 
 echo "Numero aleatorio entre 10 y 40: " .rand(10,400);
 echo "<br/>";

 // sacar pi
 echo "Numero pi ". pi();
 echo "<br/>";

 // redondear 
 echo "Redondear ".round(7.0943, 2);
 echo "<br/>";

// saber que tipo de dato es una variable 
echo gettype($nombre);
echo "<br/>";

if (is_string($nombre)) {
    echo "esa variable es un string";
    # code...
}
// detectar tipado
echo "<br/>";
if (is_float($nombre)) {

    echo "la variable nombre no es un numero condecimales";
    # code...
}

echo "<br/>";

// si existe una variable 
if (isset($edad)) {
    echo "la variable existe";
    
    # code...
}else{
     echo "la variable no existe";

}
echo "<br/>"; 
// eliminar / Limpiar  espacios
 $frase ="    mi cotenido";
 var_dump(trim($frase));
 echo "<br/>";
 // eliminar variables / indices de arrays

$year = 2020;
unset($year); // eliminar year
echo "<br/>";

// comprobar una variable vacia 
$texto  ="";
if (empty($texto)) {
    echo "La variable esta vacia";
    # code...
}else{
    echo "la variable tiene contenido";

}

echo "<br/>";

// devuelve cuantos caracteres de una cadena

$cadena = "12345";
echo strlen($cadena);
echo "<br/>";

// encontrar la posicion de un caracter determiando 
$frase = "la vida es bella";
echo strpos($frase, "vida");
echo "<br/>";

// reemplazar contenido de un string 
$frase =str_replace("vida", "moto", $frase);

echo "<br/>";
// convertir a mayusculas y minusculas 
echo strtolower($frase); // minusculas
echo strtoupper($frase); // mayusculas

?>