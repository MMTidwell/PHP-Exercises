<?php

$a = 5;
$b = 9;

function num($a, $b) {
	if (is_numeric($a) && is_numeric($b)) {
		return true;
	} else {
		throwErrorMessage($a, $b);
	}
}

function throwErrorMessage($a, $b) {
	echo "ERROR: Both args must be numbers." . PHP_EOL;
	echo "Your entries were $a and $b.";
}

function add($a, $b) {
	if (num($a, $b)) {
    	return $a + $b;
    }
}

function subtract($a, $b) {
	if (num($a, $b)) {
		return $a - $b;
	}
}

function multiply($a, $b) {
	if (num($a, $b)) {
		return $a * $b;
	}
}

function divide($a, $b) {
	if (num($a, $b)) {
		if ($a == 0  xor $b == 0) {
			echo "Can not divide by 0.";
		} else {
			return $a / $b;
		}
	}
}

function modulus($a, $b) {
	if (num($a, $b)) {
		return $a % $b;
	}
}

// Add code to test your functions here
echo add(1, 2) . PHP_EOL;
echo subtract(4, "d") . PHP_EOL;
echo multiply(5, 9) . PHP_EOL;
echo divide(9, 0) . PHP_EOL;
echo modulus(2, 100) . PHP_EOL;