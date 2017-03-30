<?php

require_once 'Log.php';

$newLog = new Log();

$newLog->logInfo("INFO", "This is an info message.");
$newLog->logError("ERROR", "This is an error message.");

?>