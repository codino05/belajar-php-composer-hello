<?php

require_once __DIR__ . '/vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

$log = new Logger("quenull");
$log->pushHandler(new StreamHandler("application.log", Logger::info));

$log->info("hello world");
$log->info("selamat belajar php");
