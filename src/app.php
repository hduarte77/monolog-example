<?php

namespace App;

require_once(__DIR__ . '/../vendor/autoload.php');

use Beto\Log;


$logfile = __DIR__ . "/logs/app.log";
$logger = new Log('app', $logfile);

//This messages will appear in console and logfile
$logger->info('user modified', ["user" => ["name" => "Bilbo Baggins", "email" => "bilbo@bagend.com"],]);
$logger->warning('warning message');
$logger->critical('critical message');
$logger->error('error message', ["reason" => "user without permission",]);


//debug messages will appear in logfile only
$logger->debug('debug message', ["full_msg" => ["Full error message with context"],]);