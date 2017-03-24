<?php

$filename = "contacts.txt";

function showOptions($filename){
	fwrite(STDOUT, PHP_EOL . "Please choose an option:\n1) View Contacts\n2) Add New Contact\n3) Search for Contact\n4) Delete Contact\n5) Exit" . PHP_EOL);
	$selectedOption = trim(fgets(STDIN));
	switch ($selectedOption) {
		case 1:
			echo viewContacts($filename);
			return showOptions($filename);
			break;
		case 2:
			addNewContact($filename);
			break;
		case 3:
			searchContact($filename);
			break;
		case 4:
			deleteContact($filename);
			break;
		case 5:
			exitContacts();
			break;
		default:
			showOptions($filename);
			break;
	}
}
showOptions($filename);

function getContacts($filename){
	$handle = fopen($filename, 'r');
	$contacts = fread($handle, filesize($filename));
	$contacts = trim($contacts);
	fclose($handle);
	return $contacts;
}

function viewContacts($filename){
	fwrite(STDOUT, PHP_EOL . "Name | Phone number". PHP_EOL . (str_pad("", 20, "-")) . PHP_EOL); 
	$contacts = getContacts($filename);
	$tempArray = explode("|", $contacts);
	$contacts = implode(" | ", $tempArray); // line 43-44 is to create space between name and number (added space before/after "|")
	return $contacts  . PHP_EOL;
}
// foreach ($contacts as $contactArray) {
// 	echo str_pad($contactArray['name'], 16)."|"."   ".$contactArray['number'] . PHP_EOL;
// }
function addNewContact($filename){
	do {
		fwrite(STDOUT, "Please enter new contact name:" . PHP_EOL);
		$newContactName = trim(fgets(STDIN));
	} while (is_numeric($newContactName)||$newContactName == "");

	do {
		fwrite(STDOUT, "Please enter new contact number:" . PHP_EOL);
		$newContactNumber = trim(fgets(STDIN));
	} while (!is_numeric($newContactNumber));

	$handle = fopen($filename, 'a');
	fwrite($handle, PHP_EOL . "$newContactName|$newContactNumber");
	fclose($handle);

	clearstatcache();
	showOptions($filename);
}

function searchContact($filename){
	$contacts = getContacts($filename);
	$tempArray = explode("\n", $contacts);

	fwrite(STDOUT, "Please enter contact name or number to search for:" . PHP_EOL);
	$searchedContactName = trim(strtolower(fgets(STDIN)));

	fwrite(STDOUT, PHP_EOL . "Name | Phone number". PHP_EOL . (str_pad("", 20, "-")) . PHP_EOL); 
	foreach ($tempArray as $key => $value) {
		if (preg_match("($searchedContactName)", strtolower($value))) {
			$tempArray = explode("|", $value);
			$value = implode(" | ", $tempArray);
			echo "$value" . PHP_EOL;
		}
	}
	showOptions($filename);
}

function deleteContact($filename){
	$contacts = getContacts($filename);
	$tempArray = explode("\n", $contacts);

	fwrite(STDOUT, "Please enter contact name or number to delete:" . PHP_EOL);
	$contactNameToDelete = trim(strtolower(fgets(STDIN)));

	foreach ($tempArray as $key => $value) {
		if (preg_match("($contactNameToDelete)", strtolower($value))) {
			array_splice($tempArray, $key, 1);
		}
	}
	$string = implode("\n", $tempArray);

	$handle = fopen($filename, 'w');
	fwrite($handle, "$string");
	fclose($handle);

	clearstatcache();
	showOptions($filename);
}

function exitContacts(){
	echo "Goodbye!" . PHP_EOL;
}