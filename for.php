<?php  

// notes 
// 	√ - prompt usre for a starting and ending number, display all the numbers from start to end using a for loop 
// 	√ - refactor to allow user to choose increment
// 	√ - deflault increment to 1 if no input 
// 	- make sure the user can only pass in numbers, give an error message 

// ========= NUMBER ==============
$sNum = 1;
$eNum = 100;
$iNum = 1;

// ========= USER NUMBER PICKS ==============
fwrite(STDOUT, "Pick a starting number." );
$userSNum = trim(fgets(STDIN));
$startNum = (is_numeric($userSNum) ? $userSNum : $sNum);

fwrite(STDOUT, "Pick a ending number." );
$userENum = trim(fgets(STDIN));
$endNum = (is_numeric($userENum) ? $userENum : $eNum);

fwrite(STDOUT, "Pick an incrementing number." );
$userINum = trim(fgets(STDIN));
$incrament = (is_numeric($userINum) ? $userINum : $iNum);

// ========= LOOP THROUGH NUMBERS ==============
for ($i = $startNum; $i <= $endNum; $i += $incrament) {
	echo "\n$i";
}
echo "\n";