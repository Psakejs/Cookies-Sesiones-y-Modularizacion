<?php 

require('./funciones_retax.php');

echo get_date_from_timestamp("2022-04-25")."<br>";

echo get_short_date_from_timestamp("2022-04-25")."<br>";

echo get_time_from_timestamp("18:32:45")."<br>";

echo get_day_of_the_week(4)."<br>";

echo translate_time("1 day",true);

echo add_time("2022-04-25", "1 semana");


