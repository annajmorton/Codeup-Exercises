<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

function boolsearch($arraY,$needle) {

	
	$result = array_search($needle, $arraY);

	if (is_int($result)) {
		$result = true;
	}


	return $result;


}


function compareIT($names, $compare){

	$count = 0;

	foreach ($names as $key => $value) {
		

		if(array_search($value, $compare, true) !== false) {

			++$count;
			// var_dump($value);
		}
	}
	
	return $count;
}

fwrite(STDOUT, "give me a name to search\n");
$Sname = trim(fgets(STDIN));
echo var_export(boolsearch($names, $Sname)) . PHP_EOL;

echo "how many compare items match the name array?\n";
echo compareIT($names, $compare) . PHP_EOL;





