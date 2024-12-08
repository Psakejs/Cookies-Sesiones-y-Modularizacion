<?php 

namespace App\Classes;

use App\Traits\pet;

class Dog{

    use pet;

    public function sayWoof(){
        return "Woof 🐶";
    }

    public function takeABath(){
        return "Bath  🐶🛁";
    }


}