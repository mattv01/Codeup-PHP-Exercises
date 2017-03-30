<?php  

class Log {

	public $filename;
	public $handle;

	public function __construct($prefix = "log")
	{
		$this->filename = $prefix . "-" . date('Y-m-d') . ".log";
		$this->handle = fopen($this->filename, 'a');
	}

	public function logMessage($logLevel, $message)
	{
		$timestamp = date("Y-m-d h:i:s");
		fwrite($this->handle, PHP_EOL . "$timestamp [$logLevel] $message");
	}

	public function logInfo($logLevel, $message)
	{
		$this->logMessage($logLevel, $message);
	}


	public function logError($logLevel, $message)
	{
		$this->logMessage($logLevel, $message);
	}

	public function __destruct()
	{
		fclose($this->handle);
	}

}

?>