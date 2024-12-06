<?php 

// Establecer zona horaria

date_default_timezone_set('America/Bogota');

// Obtener la fecha actual hora y minutos para mostrarla directamente

$fecha = date('Y-m-d H:i:s');
echo $fecha."<br>";

// Obtener fecha en objeto cuando necesitemos manipular la fecha
$date_create=date_create();

// Tranformar cadena de texto en forma textual en ingles a formato unix
echo strtotime($fecha)."<br>";
echo strtotime("17 april 2022")."<br>";
echo strtotime("+1day")."<br>";
echo strtotime("next monday")."<br>";
echo strtotime("last monday")."<br>";

$unix_time=strtotime("next monday");
echo date('Y-m-d H:i:s', $unix_time)."<br>";


// Fechas inmutables no cambian
$date_immutable=new DateTimeImmutable();


// Calcular diferencia tiempo entre dos fechas
$fecha1=new DateTime();
$birthday=new DateTime('2005-12-13');
$interval=$birthday->diff($fecha1);

echo $interval->format('%y años, %m meses, %d dias  ya casi 🥳🥺')."<br>";

// Crear desde un formato dado con POO
$create_from_format= DateTime::createFromFormat("l F j Y", "sunday april 17 2023") ;

echo $create_from_format->format("Y-m-d H:i:s")."<br>";


// Modificar una fecha
$newdate=new DateTime();
$newdate->modify("+1 day +1 month");
echo $newdate->format("Y-m-d H:i:s");




