<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

// checks for upper and lower cases
function caseInsenesitiveSearch($array, $searchTerm) {
	foreach ($array as $index => $value) {
		if (strtolower($searchTerm) == strtolower($value)) {
			return $index;
		}
	}
	return false;
}

// checks if name is in array
function isFound($haystack, $needle) {
	$result = array_search($needle, $haystack);
	return $result !== false;
}

// compares both arrays
function comparison($array1, $array2) {
	$i = 0;
	foreach ($array1 as $value) {
		if (isFound($array2, $value)) {
			$i += 1;
		}
	} return $i;
}



var_dump(caseInsenesitiveSearch($names, "tina"));
var_dump(caseInsenesitiveSearch($names, "bob"));

var_dump(isFound($names, "Tina"));
var_dump(isFound($names, "Bob"));

var_dump(comparison($names, $compare));

