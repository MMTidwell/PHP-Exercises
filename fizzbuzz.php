<?php  

// Write a program that prints the numbers from 1 to 100. But for multiples of three print “Fizz” instead of the number and for the multiples of five print “Buzz”. For numbers which are multiples of both three and five print “FizzBuzz”.

// ========= NUMBER ==============
$sNum = 1;
$eNum = 100;

// ========= USER NUMBER PICKS ==============
fwrite(STDOUT, "Pick a starting number. " );
$userSNum = trim(fgets(STDIN));
$startNum = (is_numeric($userSNum) ? $userSNum : $sNum);

fwrite(STDOUT, "Pick a ending number. " );
$userENum = trim(fgets(STDIN));
$endNum = (is_numeric($userENum) ? $userENum : $eNum);

// ========= LOOP THROUGH NUMBERS ==============
for ($i = $startNum; $i <= $endNum; $i += 1) {
	// echo "$i\n";
	if ($i % 3 == 0) {
		echo "Fizz". PHP_EOL;
	} else if ($i % 5 == 0) {
		echo "Buzz" . PHP_EOL;
	} else if ($i % 3 == 0 && $i % 5 == 0) {
		echo "FizzBuzz" . PHP_EOL;
	} else {
		echo $i . PHP_EOL;
	}
}