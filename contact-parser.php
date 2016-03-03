<?php

function parseContacts($filename)
{
    $contacts = [
  	
		0 => [

		'name' => 'runs',

		'number' =>	'never'
		]

    ];

    // todo - read file and parse contacts

	$handle = fopen($filename, 'r');
	$contents = fread($handle, filesize($filename));
	trim($contents);
	fclose($handle);

	var_dump($contents);



	$contents = explode("\n", $contents);
	var_dump($contents);

	foreach ($contents as $key => $profile) {

		if (empty($profile)) {
			
			continue;
		}
		
		$tempArr = explode('|', $profile);
		$contacts[$key]['name'] = $tempArr[0];
		$contacts[$key]['number'] = $tempArr[1];

	}
    

    return $contacts;
}

var_dump(parseContacts('contacts.txt'));
