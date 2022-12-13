<?php
require __DIR__."/vendor/autoload.php";

use src\Reader;

$reader = new Reader();
$reader->setDir(__DIR__.'/files');
$reader->setFile('dados.csv');

print_r($reader->readfile());