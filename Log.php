<?php  

class Log {

	public $filename;
	public $handle;

	public function __construct($prefix = "log")
	{
		$this->filename = $prefix . "-" . date('Y-m-d') . ".log";
		$this->handle = fopen($this->filename, 'a');
	}

	public function logMessage($message)
	{
		$timestamp = date("Y-m-d h:i:s");
		fwrite($this->handle, PHP_EOL . "$timestamp $message");
	}

	public function logInfo($message)
	{
		$this->logMessage($message);
	}


	public function logError($message)
	{
		$this->logMessage($message);
	}

	public function __destruct()
	{
		fclose($this->handle);
	}

}

?>