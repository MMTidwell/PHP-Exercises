<?php 

// NOTES 
// 	√ - construct a loop that iterates through each book 
// 	√ - loops through each books key and value 
// 		√ - echo book title, list the key value pairs about each 
// 	- update loop to show only book that were written after 1950.


$books = array(
    'The Hobbit' => array(
        'published' => 1937,
        'author' => 'J. R. R. Tolkien',
        'pages' => 310
    ),
    'Game of Thrones' => array(
        'published' => 1996,
        'author' => 'George R. R. Martin',
        'pages' => 835
    ),
    'The Catcher in the Rye' => array(
        'published' => 1951,
        'author' => 'J. D. Salinger',
        'pages' => 220
    ),
    'A Tale of Two Cities' => array(
        'published' => 1859,
        'author' => 'Charles Dickens',
        'pages' => 11544
    )
);


// ================= VARIABLES ======================
$year = 1950;

// ================= BOOK INFO ======================
// outer array
foreach ($books as $name => $value) {
	echo $name . PHP_EOL;

	// inner array
	foreach ($value	 as $info => $data) {
		echo "\t $info: $data" . PHP_EOL;	
	}
}
echo PHP_EOL;

// ================= PUBLISHED AFTER 1950 ======================
// outer array
foreach ($books as $name => $value) {
	// inner array
	foreach ($value	as $info => $data) {

		// checks for key (published) and checks data to year
		if ($info == "published" && $data >= $year) {
			echo "$name was published in: $data" . PHP_EOL; 
		}
	}
} echo PHP_EOL;







