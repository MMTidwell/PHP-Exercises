<?php

$physicistsString = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';



// turn string into array
$physicistsArray = explode(', ', $physicistsString);
// sots array in alpha order
// asort($physicistsArray);
// print_r($physicistsString);
// print_r($physicistsArray);


function humanizedLIst($array, $sort = false) {
	if($sort) {
		asort($array);
	}
	
	// takes array, pops, inserts and, last element
	$insert = " and ";
	$lastElement = array_pop($array);
	return implode(", ", $array) . $insert . $lastElement . "\n";
}

$famousFakePhysicists = humanizedLIst($physicistsArray, true);

// print_r($famousFakePhysicists);
echo "Some of the most famous fictional theortical physicists are $famousFakePhysicists" . PHP_EOL;

