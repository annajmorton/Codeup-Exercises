<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam', 'Beth', 'Jo', 'Meg', 'Marmie'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];


function combine_arrays($array1, $array2){

	$combo = [];
	$count1 = count($array1);
	$count2 = count($array2);

	for ($i=0; $i < max($count1, $count2); $i++) { 
	
		if ($array1[$i] == $array2[$i]) {
			
			array_push($combo, $array1[$i]);

		} else {

			if (!empty($array1[$i])) {
				
				array_push($combo, $array1[$i]);
			}

			if (!empty($array2[$i])) {
				
				array_push($combo, $array2[$i]);
			}

		}

	}

	return $combo;

}

print_r(combine_arrays($names, $compare));










