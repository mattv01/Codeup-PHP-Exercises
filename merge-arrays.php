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


function combineArrays($firstArray, $secondArray){
	$newArray = [];
	foreach ($firstArray as $name) {
		array_push($newArray, $name);
	}
	foreach ($secondArray as $name) {
		if (!checkArrays($firstArray, $name)) {
			array_push($newArray, $name);
		} 
	}
	sort($newArray);
	print_r($newArray);
}
combineArrays($names, $compare);
