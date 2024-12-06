<?php 

try{
    $resultado=20/0;
    echo $resultado;
}catch(Throwable $e){
    echo "Ha habido un error 😰: ".$e->getMessage();
}

echo "No ha pasado nada aqui 😳";