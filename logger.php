<?php

function logMessage($logLevel, $message) {
   	// date format string (year, month, date) and (year, month, date, hour, min, sec)
	$fileNameWithDate = date("Y-m-d");
	$logEntries = date("Y-m-d g:i:sa");

	// opens file and creates it if not already created
	$handle = fopen("log-{$fileNameWithDate}.log", 'a');

	// write date to file
	fwrite($handle, "$logEntries $logLevel $message");

	// closes file 
	fclose($handle);
}

function logError($message) {
	logMessage('ERROR', $message);
}

function logInfo($message) {
	logMessage('INFO', $message);
}

logError("Username or password is incorrect" . PHP_EOL);
logInfo("User logged in successfully" . PHP_EOL);

