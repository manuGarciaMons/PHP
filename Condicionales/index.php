<?php

 /**
  * CONDICIONALES 
  IF:
  IF(CONDICION){
      INSTRUCCIONES
  }ELSE{
      OTRAS INSTRUCCIONES
  }

  OPERADORES DE COMPARACIÓN 
  == ES IGUAL
  === IDENTICO
  != DISTINTO 
  <> DIFERENTE
  !== NO IDENTICO
  < MENOR QUE
  > MAYOR QUE
  <= MENOR IGUAL QUE
  >= MAYOR IGUAL QUE 


  OPERADORES LOGICOS
  && AND
  || OR 
  ! NOT 

  */


  $color = "rojo";
  if ($color == "rojo") {
      echo "EL COLOR ES ROJO";

  }else{
      echo "el color No es rojo";
  }
 echo "<br>";
  $year = 2019;

  if ($year < 2019) {
      echo "es un año anterior a  2019";
  }else{
      echo "es un año posterior a 2019";
  }


  if ($year != 2019) {
        echo "es un año diferente a  2019";
     }else{
        echo "Estamos a 2019";
    }

    if ($year >= 2019) {
        echo "Estamos de 2019 en adelnate";
        }else{
        echo "Es un año anterior a 2019";
    }


    // comprobar si alguine es mayor de edad

    $nombre = "Manuela Garcia";
    $ciudad = "Madrid";
    $continente = "Europa";
    $edad = 42;
    $mayoria_edad = 18;

    if ($edad >= $mayoria_edad) {
        echo "<h1> $nombre es mayor de edad </h1>";

        if ($continente == "Europa") {
            echo "<h2> y es de $ciudad </h2>";
        }else{
            echo "no es de Europa";
        }
        
    }else{
        echo "<n2> $nombre No es mayor de edad </h2";
    }

    // ELSE IF
     /*$dia = 3;
    if ($dia == 1) {
        echo "Es lunes";
    }else{
        if ($dia == 2) {
           echo "es martes";
        }else{
            if ($dia == 3) {
                echo "es miercoles";
            }else{
                if ($dia == 4) {
                   echo "es jueves";
                }else{
                    if ($dia == 5) {
                        echo "es viernes";
                    }else{
                        echo "es fin de semana";
                    }
                }
            }
        }
    } */

    $dia = 3;
    if ($dia ==1) {
        echo "lunes";
    }elseif ($dia == 2) {
        echo "martes";
    }elseif ($dia == 3) {
        echo " miercoles";
    }elseif ($dia ==4) {
        echo "jueves";
    }elseif ($dia ==5) {
        echo "viernes";
    }else{
        echo " es fin de semana";
    }


    //swich
    $dia =4;
    switch ($dia) {
        case 1:
            echo "lunes";
        break;
        case 2:
            echo "martes";
        break;
        case 3:
            echo "miercoles";
        break;
        case 4:
            echo "jueves";
        break;
        case 5:
            echo "viernes";
        break;
        default:
            echo "es fin de semana ";
            break;
    }

    // otro ejemplo

    $edad1 = 18;
    $edad2 = 64;
    $edad_oficial = 20;
    if ($edad_oficial >= $edad1 && $edad_oficial <= $edad2) {
        echo "ESTA EN EDAD DE TRABAJAR";
    }else{
        echo "NO PUEDE TRABAJAR";
    }

    $pais = "Mexico";
    if ($pais == "Mexico" || $pais == "España" || $pais == "Colombia" ) {
        echo "En este pais se habla español";
    }else {
        echo "No se haba español";
    }

 //GOTO
 // saltar ciertas ejecuciones
goto marca;
 echo "<h3> Instruccion 1 </h3>";
 echo "<h3> Instruccion 2 </h3>";
 echo "<h3> Instruccion 3 </h3>";
 echo "<h3> Instruccion 4 </h3>";

 
 $pais = "Mexico";
 if ($pais == "Mexico" || $pais == "España" || $pais == "Colombia" ) {
     echo "En este pais se habla español";
 }else {
     echo "No se haba español";
 }


 marca: 
 echo "me he saltado 4 echos y un if ";


?>