<?php 
class Log 
{

	private $filename;
	private $handle;
	private $date;
	private $time;

	private function logMessage($logLevel, $message) 
	{
		$this->fileCreated();
		$message = PHP_EOL.$this->date.' '.$this->time.' ['.$logLevel.'] '.$message;
		fwrite($this->handler, $message);
	}

	public function info($message) 
	{
		//pass info to logMessage
		$this->logMessage('INFO',$message);

	}

	public function error($message) 
	{

		//pass error to logMessage
		$this->logMessage('ERROR',$message);
		 
	}

	private function fileCreated()
	{
		if (empty($this->handler)) {
			
			exit("the file is not writable". PHP_EOL);

		}
	}


	public function __construct($prefix = 'log')
	{
		// set our property variable types
		settype($prefix, 'string');

		// set the date and time
		$this->date = date('Y-m-d');
		$this->time = date('H:i:s');

		// create filename with the format $prfix-YYYY-MM-DD.log
		$this->filename = 'logdata/'.$prefix.'-'.$this->date.'.log';
		
		// check to make sure the file name is writable
		
		if (is_writable($this->filename)) {
			
			// open the file stream (handler??) whateve we call the conneciton
			$this->handler = fopen($this->filename, 'a');

		} else {

			$this->handler = false;
		}


	}

	public function __destruct()
	{
		$this->fileCreated();
		// close the handler
		fclose($this->handler);
	}



}

