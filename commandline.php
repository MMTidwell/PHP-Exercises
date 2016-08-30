<?php 
// prints out user instruction
fwrite(STDOUT, "What is your first name? " . PHP_EOL);

// asigns user input
$input = fgets(STDIN); // or $input = trim(fgets(STDIN));

// trim does not change the variable, but does remove the white spaces around it
var_dump(trim($input));	




