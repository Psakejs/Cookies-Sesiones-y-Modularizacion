<?php 

function caminito(){
    return 20/0;
}
function division(){
    return caminito();
}


try{

    $resultado=division();
    echo $resultado;

}catch(Throwable $e){

    echo "Error 😯: ".$e->getMessage()."<br>";
    echo "Linea 😙: ".$e->getLine()."<br>";
    echo "Archivo 😎: ".$e->getFile()."<br>";
    echo "Codigo 😐: ".$e->getCode()."<br>";
    echo "Trace 😍: <br>";
    echo "<pre>";
    print_r($e->getTrace());
    echo "</pre>";
}