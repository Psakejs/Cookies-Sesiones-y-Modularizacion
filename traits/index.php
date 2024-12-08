<?php 

use App\Classes\Horse;
use App\Classes\Dog;

require_once 'vendor/autoload.php';
$horse = new Horse();
$dog = new Dog();
echo "Horse"."<br>";

echo $horse->walk()."<br>";
echo $horse->runFast()."<br>";
echo $horse->HorseKick()."<br>";

echo "Dog"."<br>";

echo $dog->walk()."<br>";
echo $dog->sayWoof()."<br>";
echo $dog->takeABath()."<br>";