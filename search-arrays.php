<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];


function checkArrays($array, $name){
	if (is_int(array_search($name, $array))) {
		return "TRUE";
	} else {
		return "FALSE";
	}
}
echo checkArrays($names, "Tina")  . PHP_EOL;