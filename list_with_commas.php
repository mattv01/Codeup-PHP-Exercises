<?php

// Converts array into list n1, n2, ..., and n3
function humanizedList($array) {
	$lastNameOfArray = array_pop($array);
	array_push($array, "and $lastNameOfArray");
	$newString = implode(", ", $array);
	return $newString;
}

// List of famous peeps
$physicistsString = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';

// TODO: Convert the string into an array
$physicistsArray = explode(", ", $physicistsString);
sort($physicistsArray);

// Humanize that list
$famousFakePhysicists = humanizedList($physicistsArray);

// Output sentence
echo "Some of the most famous fictional theoretical physicists are {$famousFakePhysicists}." . PHP_EOL;