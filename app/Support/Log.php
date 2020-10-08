<?php

namespace App\Support;

use Monolog\Formatter\LineFormatter;
use Monolog\Handler\StreamHandler;
use Monolog\Logger;

class Log
{
    const ERROR = 'error';

    const DEBUG = 'debug';

    protected $monolog;

    public function __construct($name)
    {
        $dateFormat = 'Y-m-d H:i:s';
        $output = "[%datetime%] %message% \n";
        $formatter = new LineFormatter($output, $dateFormat, true, true);

        $stream = new StreamHandler(__DIR__ . "/../../logs/app/${name}.log", Logger::DEBUG);
        $stream->setFormatter($formatter);

        $this->monolog = new Logger($name);
        $this->monolog->pushHandler($stream);
    }

    public static function debug($value): void
    {
        $log = new static(self::DEBUG);
        $log->monolog->debug($value);
    }

    public static function error($value): void
    {
        $log = new static(self::ERROR);
        $log->monolog->error($value);
    }
}
