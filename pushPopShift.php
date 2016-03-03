<?php

$fruits = [];
$fruits = ['banana', 'kiwi', 'apples','plumbs'];

print_r($fruits);

array_push($fruits, 'Runts');

print_r($fruits);

$fruits[] = 'papaya';

print_r($fruits);

$languages = ['css', 'html5', 'js', 'mysql', 'php'];
$capitalizedLanguages = [];

foreach ($languages as $key => $value) {
	
	$capitalizedLanguages[$key]  = strtoupper($value);

}


print_r($languages);
print_r($capitalizedLanguages);

$chores = ['take out the paper', 'take out the trash'];
array_unshift($chores, 'do the dishes');
print_r($chores);
echo array_pop($chores) . PHP_EOL;
print_r($chores);