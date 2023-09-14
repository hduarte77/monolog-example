<?php

namespace App;
require_once(__DIR__ . '/../vendor/autoload.php');

use Beto\Log\Log;


$logfile = __DIR__ . "/logs/app.log";
$logger = new Log('app',$logfile);

//this message will appear in console and logfile
$logger->info('usuario modificado',["user"=>["name"=>"Humberto Duarte","rpe"=>"9ekby"],]);


//this message will appear in logfile only
$logger->debug('debug message',["full_msg"=>["Full message"],]);


//this message will appear in logfile only
$logger->error('error al actualizar usuario',["reason"=>"Sin permisos",]);


//this message will appear in logfile only
$logger->warning('warning message');
$logger->critical('mensaje critico');
