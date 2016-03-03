<?php

$physicistsString = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';
$physicistsArray = explode(', ', $physicistsString);


function humanizedList($ArrayIN, $isAsort = false) {

	if ($isAsort) {
		
		sort($ArrayIN);

	}

	array_push($ArrayIN, ("and " . array_pop($ArrayIN) . PHP_EOL));

	$famousFakePhysicists = implode(", ", $ArrayIN);

	return $famousFakePhysicists;
	
}


// Humanize that list
 $famousFakePhysicists = humanizedList($physicistsArray, true);

echo "Some of the most famous fictional theoretical physicists are {$famousFakePhysicists}.";
