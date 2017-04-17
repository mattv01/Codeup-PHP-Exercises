<?php  

class Log {

	private $filename;
	private $handle;

	public function __construct($prefix = "log")
	{
		$this->setFilename($prefix);
		$this->handle = fopen($this->filename, 'a');
	}

	private function setFilename($prefix)
	{
		$this->filename = $prefix . "-" . date('Y-m-d') . ".log";
		if(!touch($this->filename)){
			echo "File is not readable" . PHP_EOL;
			exit;
		}
		if(!is_writable($this->filename)){
			echo "File is not writable" . PHP_EOL;
			exit;
		}
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