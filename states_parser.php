<?php

echo "data file names comes from calling the php file\n";

if ($argc == 2) {
	
	$filename = trim($argv[1]);

	$handle = fopen($filename, 'r');
	$contentString = fread($handle, filesize($filename));

	fclose($handle);

	$arrayOfStrings = explode(PHP_EOL, $contentString);

	$stateAssArray = [];


	foreach ($arrayOfStrings as $key => $string) {
		
		$stateInfo = explode(',', $string);

		$stateAssArray[$key] = [

			'state abbriviation' => $stateInfo[0],
			'state name' => $stateInfo[1]

		];
		
	}


	var_dump($stateAssArray);

} else {

	echo "you need to pass a file name when you call the php script" . PHP_EOL;
}
