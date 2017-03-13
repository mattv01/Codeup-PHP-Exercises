<?php

$count = 2;

do {
	echo $count . PHP_EOL;
	$count *= $count;
} while ($count <= 1000000);