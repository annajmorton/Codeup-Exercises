<?php

$a = 2;
$b = 6;

function checkitout(&$num){


	$num = 12;
	echo $num . PHP_EOL;

}


echo $a . PHP_EOL;

checkitout($a);

echo $a . PHP_EOL;