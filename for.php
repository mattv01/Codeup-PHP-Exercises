<?php

fwrite(STDOUT, "Pick a number to start from: ");
$startNumber = trim(fgets(STDIN));

fwrite(STDOUT, "Pick a number to end at: ");
$endNumber = trim(fgets(STDIN));

for ($i = $startNumber; $i <= $endNumber; $i++) {
	fwrite(STDOUT, $i . PHP_EOL);
}