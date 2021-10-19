<?php

require_once 'Person.php';

$person = new Person("Bambang", "Jakarta");
$person->name = "Bambang";
$person->address = "Depok";
$person->country = "Indonesia";

// var_dump($person);

echo "Name : $person->name";
echo "Address : $person->address";
echo "Country : $person->country";