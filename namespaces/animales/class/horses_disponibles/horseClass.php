<?php 

namespace HorsesDisponibles;


class Horse {

    protected $name;
    protected $age;
    protected $color;
    protected $breed;
    protected $speed;
    public function __construct($name, $age, $color, $breed, $speed) {
        $this->name = $name;
        $this->age = $age;
        $this->color = $color;
        $this->breed = $breed;
        $this->speed = $speed;
    }
    public function getName() {
        return $this->name;
    }
    public function getAge() {
        return $this->age;
    }
    public function getColor() {
        return $this->color;
    }

    public function make_the_horse_run() {
        echo $this->name . " is running 🐎🐎🐎🐎🐎 at " . $this->speed . " km/h";
    }
}