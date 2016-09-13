<?php

class Person
{
	public $firstName;
	public $lastName;

	// all construct must be named __construct
	public function __construct($firstName, $lastName)
	{
		$this->firstName = $firstName;
		$this->lastName = $lastName;
	}

	public function __destruct()
	{
		echo "I am {$this->firstName} {$this->lastName}  " . time() . PHP_EOL;
	}
}

$john = new Person('Some', 'Name');
