<?php 

require('./class/horses_disponibles/horseClass.php');
require('./class/horses_adoptados/horseClass.php');

use HorsesDisponibles\Horse;
use HorsesAdoptados\Horse as HorseAdopted;

$horse1= new Horse("Pegasus","20","White","Criol","55");
$black_horse= new Horse("Black", "20", "Black", "Criol", "35");
$gray_horse= new Horse("Gray", "20", "Gray", "Criol", "25");

$horse_adopted1= new HorseAdopted("PerlUnicorm","2022-04-01","Sailor");
$horse_adopted2= new HorseAdopted("Pegasus", "2024-12-06", "Pancake");