<?php

fwrite(STDOUT, "Pick a number to start from: ");
$startNumber = trim(fgets(STDIN));

fwrite(STDOUT, "Pick a number to end at: ");
$endNumber = trim(fgets(STDIN));

fwrite(STDOUT, "Pick a number to count by: ");
$countByNumber = trim(fgets(STDIN));

if (!is_numeric($countByNumber)) {
	$countByNumber = 1;
}

for ($i = $startNumber; $i <= $endNumber; $i += $countByNumber) {
	fwrite(STDOUT, $i . PHP_EOL);
}