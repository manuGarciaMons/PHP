<?php
/**
 * Traer por GET los numeros
 * Opeaciones basicas De una calculadora +-* /
 */

if (isset($_GET['numero1'] ) && isset($_GET['numero2'])) {
    # code...

$numero1 = $_GET['numero1'];
$numero2 = $_GET['numero2'];

echo "Suma: ". ($numero1+ $numero2). "<br/>";
echo "Resta: ". ($numero1 - $numero2). "<br/>";
echo "Multiplicación: ". ($numero1 * $numero2). "<br/>";
echo "División: ". ($numero1 / $numero2). "<br/>";

}else{
    echo"<h1>Introduce correctamente los datos por la url</h1>";
}

?>