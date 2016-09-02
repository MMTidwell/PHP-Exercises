<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];


function combine_arrays($array, $array2) {
	$resArray = [];
	
	// Get the larger array and the shourter, this will decide what array is longer and if it is array 1 or 2
	// count($array) works simular to .length in JS and PY
	if(count($array) >= count($array2)) {
		$largerArray = $array;
		$shortArray = $array2;
	} else {
		$largerArray = $array2;
		$shortArray = $array;
	}

	// gets each element in the larger array
	foreach ($largerArray as $key => $val) {
		// in_array checks if the value exsits in the array
		// if it is not in the array then it will push it to the end of the new array
		if(in_array($val, $shortArray)) {
			array_push($resArray, $val);
		
		} else {
			array_push($resArray, $val);
			if(isset($shortArray[$key])) {
				array_push($resArray, $shortArray[$key]);
			}
		}
	} return $resArray;
}

print_r(combine_arrays($names, $compare));



