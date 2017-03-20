<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];


function checkArrays($array, $name){
	if (is_int(array_search($name, $array))) {
		return TRUE;
	} else {
		return FALSE;
	}
}
// echo checkArrays($names, "Tina")  . PHP_EOL;


function compareArrays($listOfNames, $arrayToCompare){
	$c = 0;
	foreach ($listOfNames as $name) {
		if (checkArrays($arrayToCompare, $name)) {
			$c++;
		}	
	}
	return $c;
}
echo "There are " . compareArrays($names, $compare) . " repeated names from the two arrays." . PHP_EOL;