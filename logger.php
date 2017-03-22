<?php

function logMessage($logLevel, $message)
{
	$date = date("Y-m-d");
	$time = date("h:i:s");

	$filename = "log-$date.log";
	$handle = fopen($filename, 'a');
	fwrite($handle, PHP_EOL . "$date $time [$logLevel] $message");
	fclose($handle);
}


function logInfo($logLevel, $message){
	logMessage($logLevel, $message);
}
logInfo("INFO", "This is an info message.");


function logError($logLevel, $message){
	logMessage($logLevel, $message);
}
logError("ERROR", "This is an error message.");