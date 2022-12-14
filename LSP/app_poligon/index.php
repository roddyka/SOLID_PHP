<?php

require __DIR__."/vendor/autoload.php";

use src\poligon\Rect;
use src\poligon\Square;
use src\Poligon;

$poligon = new Poligon();
$poligon->setShape(new Rect());
$poligon->getShape()->setWidth(5);
$poligon->getShape()->setHeight(10);

print_r($poligon);

echo $poligon->getArea();

//------------------------------------------------//
$square = new Poligon();
$square->setShape(new Square());
$square->getShape()->setWidth(5);

print_r($square);

echo $square->getArea();