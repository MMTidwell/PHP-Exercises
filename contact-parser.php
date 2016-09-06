<?php

function formatPhoneNumber($number) 
{
	$arrayOfNumbers = str_split($number);
	$string = "("
			  . $arrayOfNumbers[0]
			  . $arrayOfNumbers[1]
			  . $arrayOfNumbers[2]
			  . ")"
			  . "-"
			  . $arrayOfNumbers[3]
			  . $arrayOfNumbers[4]
			  . $arrayOfNumbers[5]
			  . "-"
			  . $arrayOfNumbers[6]
			  . $arrayOfNumbers[7]
			  . $arrayOfNumbers[8]
			  . $arrayOfNumbers[9];
	return $string;
}

function parseContacts($filename)
{
	// array that will hold associative arrays representing one contact
	$contacts = [];

	// get the file contents
	$handle = fopen($filename, 'r');
	$contentString = trim(fread($handle, filesize($filename)));

	// convert contents to an array of lines in the file
	$arrayOfContents = explode("\n", $contentString);

	foreach($arrayOfContents as $personString) {
		// make new array in order to change key names, exploded again so we can have name and phone on separate lines
		$newArrayWithKeys = [];
		$personArray = explode("|", $personString);

		// made key names
		$newArrayWithKeys['Name'] = $personArray[0];
		$newArrayWithKeys["Phone"] = formatPhoneNumber($personArray[1]); 

		// push newContact onto contacts array
		array_push($contacts, $newArrayWithKeys);
	}
	// close the file
	fclose($handle);
	return $contacts;
}


var_dump(parseContacts('contacts.txt'));
