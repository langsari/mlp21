<?php
require 'vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

date_default_timezone_set('Asia/Bangkok');

// Prepare logger
$log = new Logger('QuranApp');
$log->pushHandler(new StreamHandler('logs/development.log', Logger::DEBUG));
$log->pushHandler(new StreamHandler('logs/production.log', Logger::WARNING));

// Use logger
$log->debug('This is a debug message');
$log->warning('This is a warning message');
