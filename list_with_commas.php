<?php

$physicistsString = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';
$physicistsArray = explode(', ', $physicistsString);

array_push($physicistsArray, ("and " . array_pop($physicistsArray) . PHP_EOL));

$famousFakePhysicists = implode(", ", $physicistsArray);


echo "Some of the most famous fictional theoretical physicists are {$famousFakePhysicists}.";
