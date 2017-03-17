<?php

$a = 5;
$b = 10;

function add($a, $b)
{
    echo "$a + $b = " . ($a + $b) . PHP_EOL;
}

function subtract($a, $b)
{
    echo "$a - $b = " . ($a - $b) . PHP_EOL;
}

function multiply($a, $b)
{
    echo "$a * $b = " . ($a * $b) . PHP_EOL;
}

function divide($a, $b)
{
    echo "$a / $b = " . ($a / $b) . PHP_EOL;
}

function modulus($a, $b)
{
    echo "$a % $b = " . ($a % $b) . PHP_EOL;
}


add($a, $b) . PHP_EOL;
subtract($a, $b) . PHP_EOL;
multiply($a, $b) . PHP_EOL;
divide($a, $b) . PHP_EOL;
modulus($a, $b) . PHP_EOL;