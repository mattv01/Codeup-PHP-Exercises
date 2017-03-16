<?php 

// 1. Write a for loop that sings "99 bottles of beer on the wall". Make sure the script never says "1 bottles of beer on the wall" and when we have no bottles of beer, the script will say "oh no, somebody go to a meetup!"

for ($i = 99; $i >= 0; $i--) { 
	if ($i == 0) {
		echo "Oh no, somebody go to a meetup!" . PHP_EOL;
	} elseif ($i == 1) {
		echo "$i bottle of beer on the wall, $i bottle of beer, take one down, pass it around, 0 bottles of beer on the wall...." . PHP_EOL;
	} elseif($i == 2) {
		echo "$i bottles of beer on the wall, $i bottles of beer, take one down, pass it around, 1 bottle of beer on the wall" . PHP_EOL;
	} else {
		echo "$i bottles of beer on the wall, $i bottles of beer, take one down, pass it around, " . ($i - 1) . " bottles of beer on the wall" . PHP_EOL;
	}
}


// 2. Using the following associative array, produce a script that does the following:
// 	- Outputs only the states with an "x" character in the state name
// 	- Outputs all the states without the letter "a" in their name
// 	- Outputs the states and abbreviations of all the states starting with vowels.

$states = [
	'AL' => 'Alabama',
	'AK' => 'Alaska',
	'AZ' => 'Arizona',
	'AR' => 'Arkansas',
	'CA' => 'California',
	'CO' => 'Colorado',
	'CT' => 'Connecticut',
	'DE' => 'Delaware',
	'DC' => 'District of Columbia',
	'FL' => 'Florida',
	'GA' => 'Georgia',
	'HI' => 'Hawaii',
	'ID' => 'Idaho',
	'IL' => 'Illinois',
	'IN' => 'Indiana',
	'IA' => 'Iowa',
	'KS' => 'Kansas',
	'KY' => 'Kentucky',
	'LA' => 'Louisiana',
	'ME' => 'Maine',
	'MD' => 'Maryland',
	'MA' => 'Massachusetts',
	'MI' => 'Michigan',
	'MN' => 'Minnesota',
	'MS' => 'Mississippi',
	'MO' => 'Missouri',
	'MT' => 'Montana',
	'NE' => 'Nebraska',
	'NV' => 'Nevada',
	'NH' => 'New Hampshire',
	'NJ' => 'New Jersey',
	'NM' => 'New Mexico',
	'NY' => 'New York',
	'NC' => 'North Carolina',
	'ND' => 'North Dakota',
	'OH' => 'Ohio',
	'OK' => 'Oklahoma',
	'OR' => 'Oregon',
	'PA' => 'Pennsylvania',
	'PR' => 'Puerto Rico',
	'RI' => 'Rhode Island',
	'SC' => 'South Carolina',
	'SD' => 'South Dakota',
	'TN' => 'Tennessee',
	'TX' => 'Texas',
	'VI' => 'US Virgin Islands',
	'UT' => 'Utah',
	'VT' => 'Vermont',
	'VA' => 'Virginia',
	'WA' => 'Washington',
	'WV' => 'West Virginia',
	'WI' => 'Wisconsin',
	'WY' => 'Wyoming'
];

echo "" . PHP_EOL; // just to create room inbetween exercises in terminal 
echo "States with the letter 'x' in their name:" . PHP_EOL;
foreach ($states as $stateAbbrv => $stateName) {
	if (strpos($stateName, 'x')) {
		echo "\t $stateName" . PHP_EOL;
	}
}

echo "" . PHP_EOL; // just to create room inbetween exercises in terminal 
echo "States without the letter 'a' in their name:" . PHP_EOL;
foreach ($states as $stateAbbrv => $stateName) {
	if (!strpos($stateName, 'a')) {
		echo "\t $stateName" . PHP_EOL;
	}
}

echo "" . PHP_EOL; // just to create room inbetween exercises in terminal 
echo "States that start with a vowel in their name AND abbreviation:" . PHP_EOL;
foreach ($states as $stateAbbrv => $stateName) {
	if (in_array($stateAbbrv{0}, ['A','E','I','O','U']) && in_array($stateName{0}, ['A','E','I','O','U'])) {
		echo "\t $stateAbbrv $stateName" . PHP_EOL;
	}
}


// Exercises Part 2
// Use a foreach to make a new array containing states that start with and end with vowels
	// call the array $statesStartingAndEndingWithVowels
	// echo "These are states starting and ending with vowels"
	// then echo each state name in this new array

echo "" . PHP_EOL; // just to create room inbetween exercises in terminal
foreach ($states as $stateAbbrv => $stateName) {
	if ((in_array($stateName{0}, ['A','E','I','O','U'])) && (in_array((substr($stateName, -1)), ['a','e','i','o','u']))) {
		$statesStartingAndEndingWithVowels[] = array('state' => $stateName);
	}
}

echo "States that start and end with a vowel in their name:" . PHP_EOL; 
foreach ($statesStartingAndEndingWithVowels as $key => $value) {
	foreach ($value as $key => $state) {
		echo "\t $state" . PHP_EOL;
	}
}


// use a foreach to construct a new array containing states with names that are more than one word.
	// call the array $statesWithMoreThanOneWordNames
	// echo "These are the states with more than one word in their name"
	// then echo each state name below

echo "" . PHP_EOL; // just to create room inbetween exercises in terminal
foreach ($states as $stateAbbrv => $stateName) {
	if (strpos($stateName, ' '))  {
		$statesWithMoreThanOneWordNames[] = array('state' => $stateName);
		// echo "$stateName" . PHP_EOL;
	}
}

echo "These are the states with more than one word in their name:" . PHP_EOL; 
foreach ($statesWithMoreThanOneWordNames as $key => $value) {
	foreach ($value as $key => $state) {
		echo "\t $state" . PHP_EOL;
	}
}


// use a foreach to construct a new array of all the states with "North" "East" "South" or "West"
	// call the array $arrayOfCardinalStates
	// echo "These are states with north, south, east, or west in their name"

echo "" . PHP_EOL; // just to create room inbetween exercises in terminal
foreach ($states as $stateAbbrv => $stateName) {
	if (preg_match('(North|South|West|East)',$stateName)) {
		$arrayOfCardinalStates[] = array('state' => $stateName);
	}
}

echo "These are states with north, south, east, or west in their name:" . PHP_EOL; 
foreach ($arrayOfCardinalStates as $key => $value) {
	foreach ($value as $key => $state) {
		echo "\t $state" . PHP_EOL;
	}
}