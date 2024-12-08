<?php
namespace App\Classes;

use App\Traits\pet;


class Horse{

    use pet;

    public function runFast(){
        return "I am running fast 🐎🐎";
    }

    public function HorseKick(){
        return "Pateando 🦾";
    }

}