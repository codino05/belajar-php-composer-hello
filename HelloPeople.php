<?php

require_once __DIR__ . '/vendor/autoload.php';

use quenull\Data\People;

$people = new People("eko");
echo $people->sayHello("budi") . PHP_EOL;
