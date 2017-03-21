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
logMessage("INFO", "This is an info message.");
logMessage("ERROR","This is an error message.");