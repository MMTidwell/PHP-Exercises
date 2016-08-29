<?php 

// do while loop counts from 0 to 100 by 2
$num1 = 0; 

do {
	echo $num1 . PHP_EOL;
	$num1 += 2;
} while ($num1 <= 100);

echo PHP_EOL;

// do while loop starts at 100 and goes to -10 by 5s
$num2 = 100;

do {
	echo $num2 . PHP_EOL;
	$num2 -= 5;
} while ($num2 >= -10);

echo PHP_EOL; 

// do while starting at 2 and echos $a * $a while less than 1000000
$num3 = 2;

do {
	echo $num3 . PHP_EOL;
	$num3 *= $num3;
} while ($num3 < 1000000);