<?php

// capturar excepciones en codigo suceptible a errores
try{
    if (isset($_GET['id'])){
        echo "<h1>El parametro es: {$_GET['id']} </h1>";
    }else{
        throw new \mysql_xdevapi\Exception("Faltan parametros por la URL");
    }

}catch (Exception $e){
    echo "Ha habido un error". $e->getMessage();

} finally{
    echo "Todo correcto";
}

