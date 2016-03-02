<?php

// TODO: Create your inspect() function here

function inspect($varBall) {

	$vdata = ['type'=>'','val'=>''];

	$vdata['type'] = gettype($varBall);
	$vdata['val'] = var_export($varBall);

	// switch ($vdata['type']) {
	// 	case 'string':
			
	// 		break;
		
	// 	default:
	// 		# code...
	// 		break;
	// }

	// echo $vdata['type'] . " and " . $vdata['val'] . PHP_EOL;
	return $vdata;

}

// whats not working: 
// num2 missing decimal 
// null should show "NULL"
// bools need to show true/false
// strings need to show count
// string "" should show something

function printIt($p) {

	// echo var_dump($p);
	echo "My type is {$p['type']} and my value is "; 

	if (is_array($p['val'])) {
		
		if (empty($p['val'])) {
			
			echo "empty" . PHP_EOL;

		} else {

			echo "...\n";

			foreach ($p['val'] as $key => $value) {
				
				echo "$value for index $key" . PHP_EOL;
			}
		}

	} else {

		echo $p['val'] . PHP_EOL;

	}

	echo PHP_EOL;

}

// Do not mofify these variables!
$string1 = "I'm a little teapot";
$string2 = '';
$array1 = [];
$array2 = [1, 2, 3];
$bool1 = true;
$bool2 = false;
$num1 = 0;
$num2 = 0.0;
$num3 = 12;
$num4 = 14.4;
$null = NULL;

// TODO: After each echo statement, use inspect() to output the variable's type and its value

echo 'Inspecting $num1:' . PHP_EOL;
printIt(inspect($num1));

echo 'Inspecting $num2:' . PHP_EOL;
printIt(inspect($num2));

echo 'Inspecting $num3:' . PHP_EOL;
printIt(inspect($num3));

echo 'Inspecting $num4:' . PHP_EOL;
printIt(inspect($num4));

echo 'Inspecting $null:' . PHP_EOL;
printIt(inspect($null));

echo 'Inspecting $bool1' . PHP_EOL;
printIt(inspect($bool1));

echo 'Inspecting $bool2' . PHP_EOL;
printIt(inspect($bool2));

echo 'Inspecting $string1' . PHP_EOL;
printIt(inspect($string1));

echo 'Inspecting $string2' . PHP_EOL;
printIt(inspect($string2));

echo 'Inspecting $array1' . PHP_EOL;
printIt(inspect($array1));

echo 'Inspecting $array2' . PHP_EOL;
printIt(inspect($array2));
