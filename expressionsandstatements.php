<?php

$day_number = 250;

$days_to_new_year = 366 - $day_number;

if ($days_to_new_year < 30)
{
	echo "Not long now till new year"; 
}

if ($days_to_new_year > 30)
{
	echo "The new year is not yet upon us";
}
