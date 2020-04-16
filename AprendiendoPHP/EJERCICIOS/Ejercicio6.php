<?php

/**
 * Todas las tablas de multiplicar del 1-10  en una tabla de html
 *
 */

echo "<table border='1'> <tr>"; // inicio de la tabla
echo "<tr>"; // inicio fila de celdas

for ($cabecera=1; $cabecera <=10; $cabecera+1) { 
    # code...
    echo "<td>Tabla del $cabecera</td> ";
}

echo "</tr>"; // cierre fila de la 1 celda
echo "<tr>"; // inicio fila 2 celda

for ($i=1; $i < 10; $i++) { 
    echo "<td>";
    for ($x=1; $x <=10 ; $x++) { 
        echo "$i x $x = ". ($i*$x). "<br>";
    }

    echo "</td>";
}
echo "</tr>"; // cirre fila 2
echo "</table>"; // fin de la tabla
?>
