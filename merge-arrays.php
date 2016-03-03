<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam', 'Beth', 'Jo', 'Meg', 'Marmie'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];


function combine_arrays($array1, $array2){

	$combo = [];
	$count1 = count($array1);
	$count2 = count($array2);
	$maxA = $array1;
	$minA = $array2;

	if ($count1 < $count2) {
		
		$maxA = $array2;
		$minA = $array1;

	}	

	for ($i=0; $i < max($count1, $count2); $i++) { 
	
		
		if (!empty($minA[$i])) {
			
			if ($maxA[$i] == $minA[$i]) {
				
				array_push($combo, $maxA[$i]);

			} else {

				array_push($combo, $maxA[$i], $minA[$i]);

			}

		} else {

			array_push($combo, $maxA[$i]);

		}


	}

	return $combo;

}

print_r(combine_arrays($compare, $names));










