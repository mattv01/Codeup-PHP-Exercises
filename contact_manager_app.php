<?php

function giveOptions(){
	fwrite(STDOUT, PHP_EOL . "Please choose an option:\n1) View Contacts\n2) Add New Contact\n3) Search for Contact\n4) Delete Contact\n5) Exit" . PHP_EOL);
	$selectedOption = trim(fgets(STDIN));
	switch ($selectedOption) {
		case 1:
			echo viewContacts();
			return giveOptions();
			break;
		case 2:
			addNewContact();
			break;
		case 3:
			searchContact();
			break;
		case 4:
			deleteContact();
			break;
		case 5:
			exitContacts();
			break;
		default:
			giveOptions();
			break;
	}
}
giveOptions();

function viewContacts(){
	fwrite(STDOUT, PHP_EOL . "Name | Phone number". PHP_EOL . (str_pad("", 20, "-")) . PHP_EOL); 
	$filename = "contacts.txt";
	$handle = fopen($filename, 'r');
	$contacts = fread($handle, filesize($filename));
	$contacts = trim($contacts);
	fclose($handle);
	$tempArray = explode("|", $contacts);
	$contacts = implode(" | ", $tempArray); // line 9-10 is to create space between name and number (added space before/after "|")
	return $contacts  . PHP_EOL;
}

function addNewContact(){
	fwrite(STDOUT, "Please enter new contact name:" . PHP_EOL);
	$newContactName = trim(fgets(STDIN));
	fwrite(STDOUT, "Please enter new contact number:" . PHP_EOL);
	$newContactNumber = trim(fgets(STDIN));

	$filename = "contacts.txt";
	$handle = fopen($filename, 'a');
	fwrite($handle, PHP_EOL . "$newContactName|$newContactNumber");
	fclose($handle);

	clearstatcache();
	giveOptions();
}

function searchContact(){
	$filename = "contacts.txt";
	$handle = fopen($filename, 'r');
	$contacts = fread($handle, filesize($filename));
	$contacts = trim($contacts);
	fclose($handle);
	$tempArray = explode("\n", $contacts);

	fwrite(STDOUT, "Please enter contact name to search for:" . PHP_EOL);
	$searchedContactName = trim(strtolower(fgets(STDIN)));

	fwrite(STDOUT, PHP_EOL . "Name | Phone number". PHP_EOL . (str_pad("", 20, "-")) . PHP_EOL); 
	foreach ($tempArray as $key => $value) {
		if (preg_match("($searchedContactName)", strtolower($value))) {
			$tempArray = explode("|", $value);
			$value = implode(" | ", $tempArray);
			echo "$value" . PHP_EOL;
		}
	}
	clearstatcache();
	giveOptions();
}

function deleteContact(){
	$filename = "contacts.txt";
	$handle = fopen($filename, 'r');
	$contacts = fread($handle, filesize($filename));
	$contacts = trim($contacts);
	fclose($handle);

	$tempArray = explode("\n", $contacts);
	fwrite(STDOUT, "Please enter contact name to delete:" . PHP_EOL);
	$contactNameToDelete = trim(strtolower(fgets(STDIN)));

	foreach ($tempArray as $key => $value) {
		if (preg_match("($contactNameToDelete)", strtolower($value))) {
			array_splice($tempArray, $key, 1);
		}
	}
	$string = implode("\n", $tempArray);

	$filename = "contacts.txt";
	$handle = fopen($filename, 'w');
	fwrite($handle, "$string");
	fclose($handle);

	clearstatcache();
	giveOptions();
}

function exitContacts(){
	echo "Goodbye!" . PHP_EOL;
}

