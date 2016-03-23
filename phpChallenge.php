<?php 

$test = [1,1,3,3,4,4,5,5,7,7,8];
$prev = $test[0];
$post = $test[0];


for ($i=0; $i < count($test) ; $i++) { 
	
	if ($i == count($test) - 1) {
		
		$prev = $test[$i];

	} else {

		$prev = $test[($i+1)];

	}
	
	if ($i==0) {
		
		$post = $test[0];

	} else {
	
		$post = $test[($i-1)];

	}

	if ( $test[$i] != $prev && $test[$i] != $post) {
		
		echo "1. this is the value " . $test[$i] . PHP_EOL;

	} 

	if ($i==0 && $test[$i]!=$prev) {
		echo "1. this is the value " . $test[$i] . PHP_EOL;
	}

	if ($i== (count($test)-1) && $test[$i]!=$post) {
		echo "1. this is the value " . $test[$i] . PHP_EOL;
	}

}


function palindrome($numb) {
	$numb = strval($numb);
	$rev_numb = strrev($numb);

	if ($numb == $rev_numb) {
		
		echo "2. this is a palindrome " . $numb . PHP_EOL;
	} else {

		echo "2. NOT a palindrome " . $numb . PHP_EOL;
	}

}
palindrome(78987);
palindrome(5890985);
palindrome(12312);
palindrome(9000009000000009);

function cmp_function($arr) {

	$a 
	$b
	$c



	for ($i=0; $i < count($arr); $i++) { 
		
		// even number
		if ($i%2 == 0) {
			

		} else {

		}

	}

	if ($a == $b) {
        return 0;
    }
    return ($a < $b) ? -1 : 1;
	}


}

usort($arr, cmp_function)








