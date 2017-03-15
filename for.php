<?php

// Choose a number to start from
do {
	fwrite(STDOUT, "Pick a number to start from: ");
	$startNumber = trim(fgets(STDIN));
} while (!is_numeric($startNumber));


// Choose a number to end at
do {
	fwrite(STDOUT, "Pick a number to end at: ");
	$endNumber = trim(fgets(STDIN));
} while (!is_numeric($endNumber));


// Choose number to count by... 
fwrite(STDOUT, "Pick a number to count by: ");
$countByNumber = trim(fgets(STDIN));
//...or set count number to 1 if no numeric value was chosen, or if 0 or a negative number was given
if (!is_numeric($countByNumber) || ($countByNumber <= 0)) {
	$countByNumber = 1;
}


// Do the counting
for ($i = $startNumber; $i <= $endNumber; $i += $countByNumber) {
	fwrite(STDOUT, $i . PHP_EOL);
}


// If start number is greater than the end number, count backwards
if ($startNumber > $endNumber) {
	for ($i = $startNumber; $i >= $endNumber; $i -= $countByNumber) {
		fwrite(STDOUT, $i . PHP_EOL);
	}
}