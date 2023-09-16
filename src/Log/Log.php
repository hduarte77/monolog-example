<?php

namespace Beto;

use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Monolog\Formatter\LineFormatter;

class Log
{

    private $log;


    public function __construct($logname, $logfile = null)
    {

        $this->log = new Logger($logname);

        //define a line format for logs
        $output = "[%datetime%] [%channel%] [%level_name%] %message% %context%\n";
        $dateFormat = "Y-m-d H:i:s";

        // finally, create a formatter
        $formatter = new LineFormatter($output, $dateFormat);

        //if there is a logfile all messages
        if ($logfile) {

            $file_stream = new StreamHandler($logfile, Logger::DEBUG);
            $file_stream->setFormatter($formatter);

            $this->log->pushHandler($file_stream);

        }

        //by default log to console info, warning and error messages
        $stream_handler = new StreamHandler("php://stdout", Logger::INFO);
        $stream_handler->setFormatter($formatter);
        $this->log->pushHandler($stream_handler);

    }

    public function info($str, $data = [])
    {

        $this->log->info($str, $data);

    }

    public function error($str, $data = [])
    {

        $this->log->error($str, $data);

    }


    public function debug($str, $data = [])
    {

        $this->log->debug($str, $data);

    }

    public function warning($str, $data = [])
    {

        $this->log->warning($str, $data);

    }


    public function critical($str, $data = [])
    {

        $this->log->critical($str, $data);

    }





}