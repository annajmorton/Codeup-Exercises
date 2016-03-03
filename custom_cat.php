<?php
// this is replicating the "cat" command

$filename = 'cities.txt'

if (file_exists($filename, 'r')) {
	
	$handle = fopen($filename, 'r');
	$content = fread($handle, filesize($filename))
	fclose($handle);
}

