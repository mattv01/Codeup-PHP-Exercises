<?php

// $a = 500;
// $b = 10;

// function add($a, $b)
// {
// 	echo "$a + $b = " . ($a + $b) . PHP_EOL;
// }

// function subtract($a, $b)
// {
// 	echo "$a - $b = " . ($a - $b) . PHP_EOL;
// }

// function multiply($a, $b)
// {
// 	echo "$a * $b = " . ($a * $b) . PHP_EOL;
// }

// function divide($a, $b)
// {
// 	echo "$a / $b = " . ($a / $b) . PHP_EOL;
// }

// function modulus($a, $b)
// {
// 	echo "$a % $b = " . ($a % $b) . PHP_EOL;
// }


// add($a, $b) . PHP_EOL;
// subtract($a, $b) . PHP_EOL;
// multiply($a, $b) . PHP_EOL;
// divide($a, $b) . PHP_EOL;
// modulus($a, $b) . PHP_EOL;





function add($a, $b)
{
    return $a + $b;
}

function subtract($a, $b)
{
    return $a - $b;
}

function multiply($a, $b)
{
    return $a * $b;
}

function divide($a, $b)
{
    return $a / $b;
}

function modulus($a, $b)
{
    return $a % $b;
}


echo add(1, 5) . PHP_EOL;
echo subtract(1, 5) . PHP_EOL;
echo multiply(1, 5) . PHP_EOL;
echo divide(1, 5) . PHP_EOL;
echo modulus(1, 5) . PHP_EOL;