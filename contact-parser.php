<?php

function parseContacts($filename)
{
	$contacts = array();

	$handle = fopen($filename, 'r');
	$contents = fread($handle, filesize($filename));
	$contents = trim($contents);
	fclose($handle);

	$listOfContacts = explode("\n", $contents);
	foreach ($listOfContacts as $key => $contact) {
		$tempArray = explode("|", $contact);
		$contacts[$key]["name"] = $tempArray[0];
		$contacts[$key]["number"] = $tempArray[1];
	}
	return $contacts;
}
var_dump(parseContacts('contacts.txt'));