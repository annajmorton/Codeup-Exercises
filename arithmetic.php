<?php

function add($a, $b)
{
    return $a + $b;
}

function subtract($a, $b)
{
    return $a - $b;
}

function multiply($a, $b)
{
    return $a * $b;
}

function divide($a, $b)
{
    return $a / $b;
}
function modulus($a ,$b){

	return $a % $b;
}

echo 'function party!'.PHP_EOL;

$good = 2;
$bad = 5;

$ulgy = add($good, $bad);

echo $ulgy . PHP_EOL;


echo subtract($good, $bad) . PHP_EOL;

fwrite(STDOUT, multiply($good ,$bad) . PHP_EOL);

echo $ulgy = divide($good, $bad);

fwrite(STDOUT, modulus($good, $bad) . PHP_EOL);





