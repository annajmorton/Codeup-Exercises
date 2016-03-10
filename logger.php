<?php

function logMessage($logLevel, $message)
{
    // todo - complete this function


    // get date and time

	$date = date('Y-m-d');
	$time = date('H:i:s');
	$filename = 'logdata/'.$date.'.log';

    // append/open a file named date

	$handler = fopen($filename, 'a');

    // add message

	$fileTest = filesize($filename);
	echo var_dump($fileTest);

	if ($fileTest == 0) {

		fwrite($handler, $date.' '.$time.' ['.$logLevel.'] '.$message);
	}

	fwrite($handler, PHP_EOL.$date.' '.$time.' ['.$logLevel.'] '.$message);

	fclose($handler);

}

function logInfo($message = "this is some info") {

	logMessage("INFO", $message);
}

function logError($message = "this is an error"){

	logMessage("ERROR", $message);
}


logInfo();
logError();