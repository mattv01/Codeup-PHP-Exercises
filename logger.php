<?php

function logMessage($message)
{
	$date = date("Y-m-d");
	$time = date("h:i:s");

	$filename = "log-$date.log";
	$handle = fopen($filename, 'a');
	fwrite($handle, PHP_EOL . "$date $time $message");
	fclose($handle);
}


function logInfo($message){
	logMessage($message);
}
logInfo("[INFO] This is an info message.");


function logError($message){
	logMessage($message);
}
logError("[ERROR] This is an error message.");