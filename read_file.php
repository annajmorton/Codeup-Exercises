<?php

$handle = fopen("read_file_data.csv", 'a');

$newCities = ["Changhua County, Taiwan Hamina", "Finland St Ghislain, Belgium", "Dublin, Ireland"];


foreach ($newCities as $city) {
	
	fwrite($handle, PHP_EOL . $city);

}

fclose($handle);

$cities = file_get_contents("read_file_data.csv");

var_dump($cities);