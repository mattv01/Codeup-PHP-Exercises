<?php

// Choose a number to start from
do {
	fwrite(STDOUT, "Pick a number to start from (no commas): ");
	$startNumber = trim(fgets(STDIN));
} while (!is_numeric($startNumber) || ($startNumber > 10000000) || ($startNumber <- 10000000));


// Choose a number to end at
do {
	fwrite(STDOUT, "Pick a number to end at (no commas): ");
	$endNumber = trim(fgets(STDIN));
} while (!is_numeric($endNumber) || ($endNumber > 10000000) || ($endNumber < -10000000));


// Choose number to count by... 
fwrite(STDOUT, "Pick a number to count by: ");
$countByNumber = trim(fgets(STDIN));
//...or set count number to 1 if no numeric value was chosen, or if number is less than 1 including negative numbers
if (!is_numeric($countByNumber) || ($countByNumber < 1)) {
	$countByNumber = 1;
}
//This is to adjust count-by number if the difference between the start and end numbers are too big (prevents the count taking too long to process)
if ((abs($endNumber - $startNumber) >= 10000) && ($countByNumber < 100)) {
	$countByNumber *= 10000;
}
if ((abs($endNumber - $startNumber) > 1000) && ($countByNumber < 10)) {
	$countByNumber *= 1000;
}


// Does the counting
for ($i = $startNumber; $i <= $endNumber; $i += $countByNumber) {
	fwrite(STDOUT, $i . PHP_EOL);
}


// If start number is greater than the end number, count backwards
if ($startNumber > $endNumber) {
	for ($i = $startNumber; $i >= $endNumber; $i -= $countByNumber) {
		fwrite(STDOUT, $i . PHP_EOL);
	}
}