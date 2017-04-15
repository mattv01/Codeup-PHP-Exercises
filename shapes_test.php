<?php
require_once __DIR__ . '/Square.php';
require_once __DIR__ . '/Rectangle.php';

$rectangle = new Rectangle(10, 20);
$rectangle->height = 4;
$rectangle->width = 5;
echo $rectangle->area() . PHP_EOL;

$square = new Square(10);
// $square->height = 4;
echo $square->perimeter() . PHP_EOL;

?>