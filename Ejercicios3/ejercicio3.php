<?php

/**
 * 
 * hacer una interfaz de usuario con 2 inputs y 4 botones
 * para sumar restar, multiplicar y dividir 
 * 
 * 
 */

$resultado = false;
if (isset($_POST['n1']) && isset($_POST['n2'])) {
   
    if (isset($_POST['sumar'])) {
        $resultado = "  El resultado es: ".($_POST['n1'] + $_POST['n2']);
    }

    if (isset($_POST['restar'])) {
        $resultado = "  El resultado es: ".($_POST['n1'] - $_POST['n2']);
    }

    if (isset($_POST['multiplicar'])) {
        $resultado = "  El resultado es: ".($_POST['n1'] * $_POST['n2']);
    }

    if (isset($_POST['dividir'])) {
        $resultado = "  El resultado es: ".($_POST['n1'] / $_POST['n2']);
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora en php</title>
</head>

<body>
    <h1>Calculadora PHP</h1>
    <form action="" method="post">

        <label for="n1">Numero 1</label><br/>
        <input type="number" name="n1" id=""><br/>

        <label for="n2">Numero 2</label><br/>
        <input type="number" name="n2" id=""><br/><br/>

        <input type="submit" value="Sumar" name="sumar">
        <input type="submit" value="Restar" name="restar">
        <input type="submit" value="Multiplicar" name="multiplicar">
        <input type="submit" value="Dividir" name="dividir">
    </form>

    <?php
    if ($resultado != false) :
        echo "<h2> $resultado </h2>";
    endif
    ?>
</body>

</html>