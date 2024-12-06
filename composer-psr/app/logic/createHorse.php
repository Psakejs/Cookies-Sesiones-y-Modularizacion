<?php 
use App\class\horseAdopted;
use App\Class\horseAvailables;


$horse1= new horseAvailables("Pegasus","20","White","Criol","55");
$black_horse= new horseAvailables("Black", "20", "Black", "Criol", "35");
$gray_horse= new horseAvailables("Gray", "20", "Gray", "Criol", "25");

$horse_adopted1= new horseAdopted("PerlUnicorm","2022-04-01","Sailor");
$horse_adopted2= new horseAdopted("Pegasus", "2024-12-06", "Pancake");