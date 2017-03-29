<?php

require_once 'Log.php';

$newLog = new Log();
$date = date("Y-m-d");

$newLog->filename = "log-$date.log";
$newLog->date = date("Y-m-d");
$newLog->time = date("h:i:s");

$newLog->logInfo("INFO", "This is an info message.");
$newLog->logError("ERROR", "This is an error message.");

?>