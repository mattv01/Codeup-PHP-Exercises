<?php  

class Log {

	// public $filename;

	public function logMessage($logLevel, $message){
		$handle = fopen($this->filename, 'a');
		fwrite($handle, PHP_EOL . "$this->date $this->time [$logLevel] $message");
		fclose($handle);
	}

	public function logInfo($logLevel, $message){
		$this->logMessage($logLevel, $message);
	}


	public function logError($logLevel, $message){
		$this->logMessage($logLevel, $message);
	}

}

?>