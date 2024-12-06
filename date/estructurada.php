<?php 

// estructurada

$intervalo=date_interval_create_from_date_string("7 days");
$date=date_create();

$new_date=date_add($date,$intervalo);

echo date_format($new_date, "d-m-Y")."<br>";


// POO

$interval1=DateInterval::createFromDateString("7 days");
$date1=new DateTime();
$date1->add($interval1);
echo $date1->format("d-m-Y");

