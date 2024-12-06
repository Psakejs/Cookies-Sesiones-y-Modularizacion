<?php 

try{
    $pet=readline('Que quieres adoptar? ');

    if($pet=='perro'){
        throw new Exception('No hay perros 🐶');
    }else if($pet=='gato'){
        throw new Exception('No hay gatos 🐱');
    }else if($pet=='pez'){
        throw new Exception('No hay peces 🐟');
    }else{
        echo 'Adoptaste un '.$pet;
    }
    
}catch(Throwable $th){
    echo $th->getMessage();
}