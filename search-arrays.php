<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];


$result = array_search("Bob", $names);

if (is_int($result)) {
	echo "found" . PHP_EOL;
} else {
	echo "not found" . PHP_EOL;
}