<?php

date_default_timezone_set('America/Chicago');

$dayOfWeek = date('N');

switch($dayOfWeek) {

	case 1 :
		echo "Monday monday\n";
		break;

	case 2 :
		echo "good bye ruby tuesday\n";
		break;

	case 3 :
		echo "no good song for wednesday\n";
		break;

	case 4 :
		echo "can't think of a thursday song\n";
		break;

	case 5 :
		echo "its friday friday\n";
		break;

	case 6 :
		echo "saturday night i'll be in the spot\n";
		break;

	case 7 :
		echo "sunday morning coming down\n";
		break;


}