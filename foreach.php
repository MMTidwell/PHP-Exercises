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
	echo gettype($value) . PHP_EOL;
}
echo PHP_EOL;

// ================= DATA VALUE TYPE WITH SCALAR ======================
foreach ($things as $value) {
	if (is_scalar($value)) {
		if ($value == false) {
			echo "false is scalar" . PHP_EOL;
			continue;
		} echo "$value is scalar" . PHP_EOL;
	}
}
echo PHP_EOL;

// ================= ECHO VALUES ======================
foreach ($things as $value) {
	if (is_array($value)) {
		echo gettype($value) . " ";
		
		foreach ($value as $index) {
			echo $index. ", ";
		} echo PHP_EOL;
	
	} else {
		echo $value . PHP_EOL;
	}
}
echo PHP_EOL;

