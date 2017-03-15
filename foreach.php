<?php 

$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);
 
foreach ($things as $value) {
	if (is_integer($value)) {
		echo "{$value} is a integer" . PHP_EOL;
	} elseif (is_float($value)) {
		echo "{$value} is a float" . PHP_EOL;
	} elseif (is_bool($value)) {
		echo "{$value} is a boolean" . PHP_EOL;
	}  elseif (is_array($value)) {
		echo "{$value} is a array" . PHP_EOL;
	} elseif (is_null($value)) {
		echo "{$value} is a null" . PHP_EOL;
	} elseif (is_string($value)) {
		echo "{$value} is a string" . PHP_EOL;
	}
}


foreach ($things as $value) {
	if (is_scalar($value)) {
		echo "{$value} is scalar" . PHP_EOL;	
	}
}