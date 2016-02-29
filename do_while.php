<?php

$counter = 0;

do {

	echo "Loop 1 $counter \n";
	$counter += 2;

} while($counter < 100);



do {
	
	echo "Loop 2 $counter \n";
	$counter -= 5;

} while ($counter >= -10);

$counter = 2;

do {
	
	echo "Loop 3  $counter \n";
	$counter *= $counter;

} while ($counter < 1000000);