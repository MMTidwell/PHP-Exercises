<?php 

// √ - Create loop that iterates through each value and outputs its type as either 
// √ - Create loop that iterates through each value and outputs only values with the type that is scalar 
// √ - Create loop that will echo out every value including those nested in arrays 



// ================= ARRAY ======================
$things = array('Sgt. Pepper', 
				"11", 
				null, 
				array(1,2,3), 
				3.14, 
				"12 + 7", 
				false, 
				(string) 11);

// ================= DATA VALUE TYPE ======================
foreach ($things as $value) {
	// gets the data type for the value
	echo gettype($value) . PHP_EOL;
}
echo PHP_EOL;


// ================= DATA VALUE TYPE WITH SCALAR ======================
foreach ($things as $value) {
	// checks if value is scalar (float, integer, string, or boolean)
	if (is_scalar($value)) {
		if ($value == false) {
			echo "false is scalar" . PHP_EOL;
			// jumps out of loop and move to top of foreach loop
			continue;
		} echo "$value is scalar" . PHP_EOL;
	}
}
echo PHP_EOL;


// ================= ECHO VALUES ======================
foreach ($things as $value) {
	// prints out the $value type
	echo gettype($value) . " ";
	
	// checks if $value is an array
	if (is_array($value)) {
		
		// starts looking at each item in nested array
		foreach ($value as $index) {
			echo $index . ", ";
		// \x08 is a backspace
		} echo "\x08\x08 \n";

	} else {
		echo $value . PHP_EOL;
	}
}
echo PHP_EOL;


// ================= ECHO VALUES WITH IMPLODE ======================
foreach ($things as $value) {
	// prints out the $value type
	echo gettype($value) . " ";
	
	// checks if $value is an array
	if (is_array($value)) {
		// joins array element with a string
		echo (implode(", ", $value));
		echo "\x08\x08" . PHP_EOL;
	} else {
		echo $value . PHP_EOL;
	}
}
echo PHP_EOL;


