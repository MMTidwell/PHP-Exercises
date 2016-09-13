<?php 

require_once 'Log.php';

$log = new Log('cli');
// dont use $ in front of the variable since we are calling it from Log.php
$log->filename;
$log->info("This is a info message");
$log->error("This is a error message");