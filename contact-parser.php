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

	// var_dump($contents);



	$contents = explode("\n", $contents);
	// var_dump($contents);

	foreach ($contents as $key => $profile) {

		if (empty($profile)) {
			
			continue;
		}
		
		$tempArr = explode('|', $profile);
		$contacts[$key]['name'] = $tempArr[0];
		$contacts[$key]['number'] = phoneNumDash($tempArr[1]);

	}
    

    return $contacts;
}

// this function formates a phone number
function phoneNumDash($phonestrg) {

	$phonestrg = chunk_split($phonestrg, 3, "-");
	$phonestrg = substr_replace($phonestrg, substr($phonestrg,-2,1), -3);

	return $phonestrg;

};


var_dump(parseContacts('contacts.txt'));
