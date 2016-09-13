<?php 
class Log {
	public $filename;
	public $datetime;
	public $handle;

	public function __construct($prefix = 'log') 
	{
		// $this->filename = "$prefix-YYYY-MM-DD.log";
		$this->handle = fopen($this->filename = "$prefix-YYYY-MM-DD.log", 'a');
	}

	public function __destruct() 
	{
		fclose($this->handle);
	}

	function logMessage($logLevel, $message) {
		$string = "{$this->datetime} $logLevel $message" . PHP_EOL;
		fwrite($this->handle, $string);
	}

	function error($message) 
	{
		$this->logMessage('ERROR', $message);
	}

	function info($message)
	{
		$this->logMessage("INFO", $message);
	}
}











