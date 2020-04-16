<?php
/**
 * CONEXION A LA BASE DE DATOS
 */
    $conexion = mysqli_connect('localhost', 'root', '', 'phpmysql', '33065');

    // comprobar si la conexion es correcta
    if (mysqli_connect_errno()) {
        echo "La conexion a la base de datos msql ha fallado:" .mysqli_connect_error();
    }else{
        echo "Conexión realizada correctamente";
    }

    // consulta para configurar la codificacion de caracteres

    mysqli_query($conexion, "SET NAMES 'utf8' ");

    // consulta SELECT desde php

    $query =mysqli_query($conexion, "SELECT * FROM notas ");
    while ($nota = mysqli_fetch_assoc($query)) {
        echo "<h2>".$nota['titulo']. "</h2>";
        echo $nota['descripcion']. "<br/>";
    }
    // INSERTAR DATOS 
    $sql = "INSERT INTO notas VALUES(null, 'Nota Desde PHP', 'Esto es una nota de PHP', 'Green')";
    $insert = mysqli_query($conexion, $sql );


    echo "<hr>";
    if ($insert) {
        echo "Datos insertados correstamente";
    }else{
        echo "Error: ". mysqli_error($conexion);
    }

