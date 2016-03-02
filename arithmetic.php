<?php

function throwErrorMessage($a, $b, $hasDiv = false) {

	$turnItOff = false;

	if (!is_numeric($a)) {
		
		echo "$a is not numeric, please pass only numbers to the function.";
		$turnItOff = true;
	
	}

	if (!is_numeric($b)) {
		
		echo "$b is not numeric, please pass only numbers to the function.";
		$turnItOff = true;
	
	}
	
	if ($hasDiv && $b == 0) {

		echo "you entered $b, you cannot divide by zero";
		$turnItOff = true;

	}

	if ($turnItOff) {
		
		return true;

	}


	return false;


}



function add($a, $b)
{
    
	if (throwErrorMessage($a, $b)) {
		
		return;
	} 

    return $a + $b;
}

function subtract($a, $b)
{

    
	if (throwErrorMessage($a, $b)) {
		
		return;
	} 
		
    return $a - $b;
	
}

function multiply($a, $b)
{
    
	if (throwErrorMessage($a, $b)) {
		
		return;
	} 

    return $a * $b;
    	
}

function divide($a, $b)
{
    
	if (throwErrorMessage($a, $b, true)) {
		
		return;
	} 

    return $a / $b;

}
function modulus($a ,$b){

	if (throwErrorMessage($a, $b, true)) {
		
		return;
	} 
		
	return $a % $b;


}

echo 'function party!'.PHP_EOL;


fwrite(STDOUT, "Please give me two numbers and we can operate on them - yay!\n");
fwrite(STDOUT, "enter number one\n");
$good = trim(fgets(STDIN));


fwrite(STDOUT, "enter number two\n");
$bad = trim(fgets(STDIN));
echo PHP_EOL . PHP_EOL;

$ulgy = add($good, $bad);
echo $ulgy . PHP_EOL;


echo subtract($good, $bad) . PHP_EOL;

fwrite(STDOUT, multiply($good ,$bad) . PHP_EOL);

echo $ulgy = divide($good, $bad) . PHP_EOL;

fwrite(STDOUT, modulus($good, $bad) . PHP_EOL);





