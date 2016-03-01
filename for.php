<?php
echo "Hey kid! let me print you some numbres\n";

fwrite(STDOUT, "what minimum integer would you like?\n");

do {
	
	$minNum = trim(fgets(STDIN));
	

	
	if (is_numeric($minNum)) {
		
		$minNum = (int)$minNum;
		
	} else {

		fwrite(STDOUT, "that's not a number, please enter a number\n");
	}

} while (!is_int($minNum));



fwrite(STDOUT, "and how about for the maximum integer?\n");

do {
	
	$maxNum = trim(fgets(STDIN));
	

	
	if (is_numeric($maxNum)) {
		
		$maxNum = (int)$maxNum;
		
	} else {

		fwrite(STDOUT, "that's not a number, please enter a number\n");
	}

} while (!is_int($maxNum));

fwrite(STDOUT, "what incriments would you like me to count with?\n");

do {
	
	$iNum = trim(fgets(STDIN));
	

	
	if (is_numeric($iNum)) {
		
		$iNum = (int)$iNum;
		
	} else {

		$iNum = 1;

	}

} while (!is_int($iNum));



echo "\nhere come your numbers baby\n\n";

for ($i = $minNum; $i <= $maxNum ; $i= $i + $iNum) { 
	echo "$i\n";
}