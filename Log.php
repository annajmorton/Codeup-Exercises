<?php 
class Log {

	public $filename;
	public $msgprefix;
	public function logMessage($logLevel, $message) {

		$handler = fopen({$this->filename} , 'a');
		
		$message = PHP_EOL.{$this->msgprefix}.' ['.$logLevel.'] '.$message;

		fwrite($handler, $message);
		fclose($handler);

	};
	public function info($message) {

		//pass info to logMessage
		$this->logMessage('INFO',$message);

	};
	public function error($message) {

		//pass error to logMessage
		$this->logMessage('ERROR',$message);
		 
	};

}

