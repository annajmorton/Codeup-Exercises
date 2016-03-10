<?php  

// require_once "Log.php";

class Log {

	public $filename;
	public $msgprefix;
	public function logMessage($logLevel, $message) {

		$handler = fopen($this->filename, 'a');
		
		$message = PHP_EOL.$this->msgprefix.' ['.$logLevel.'] '.$message;

		fwrite($handler, $message);
		fclose($handler);

	}
	public function info($message) {

		//pass info to logMessage
		$this->logMessage('INFO',$message);

	}
	public function error($message) {

		//pass error to logMessage
		$this->logMessage('ERROR',$message);
		 
	}

}

$date = date('Y-m-d');
$time = date('H:i:s');

var_dump($date);
var_dump($time);

$ddlog = new Log();

$ddlog->filename = 'logdata/'.$date.'.log';
$ddlog->msgprefix = $date.' '.$time;



$ddlog->info("test");
$ddlog->error("test");









