<?php

$physicistsString = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';
$physicistsArray = explode(', ', $physicistsString);


function humanizedList($ArrayIN, $isAsort = false) {

	if ($isAsort) {
		
		
		// resort by last name first 

		foreach ($ArrayIN as $key => &$value) {
			
			$tempArr  = explode(' ', $value);
			array_unshift($tempArr, array_pop($tempArr));
			$value = implode(" ", $tempArr);

		}

		sort($ArrayIN);


		foreach ($ArrayIN as $key => &$value) {
			
			$tempArr  = explode(' ', $value);
			array_push($tempArr, array_shift($tempArr));
			$value = implode(" ", $tempArr);

		}


	}

	array_push($ArrayIN, ("and " . array_pop($ArrayIN) . PHP_EOL));

	$famousFakePhysicists = implode(", ", $ArrayIN);

	return $famousFakePhysicists;
	
}


// Humanize that list
 $famousFakePhysicists = humanizedList($physicistsArray, true);

echo "Some of the most famous fictional theoretical physicists are {$famousFakePhysicists}.";
