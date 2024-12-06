<?php 
require "vendor/autoload.php";

class Michi{

    protected $patas=[];
    protected $color;


    function __construct($color){
        $this->color=$color;

        for($i=0;$i<4;$i++){
            $this->patas[$i]=new Pata();
        }
    }

}


class Pata{
    protected $nails=4;
    protected $description;

    function get_description(){
        return $this->description;
    }
}


$casa_de_michis = array(
    "nombre"=>"Michilango",
    "ubicacion"=>[
        "pais"=>"Mexico",
        "ciudad"=>"Monterrey",
        "calle"=>"Calle de michis",
        "numero"=>"123"
    ],
    "michis"=>array(
        new Michi("negro"),
        new Michi("blanco"),
        new Michi("gris"),
    )
    );

dd($casa_de_michis);