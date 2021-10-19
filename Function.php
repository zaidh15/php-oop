<?php

require_once 'Person.php';

$person = new Person("Mamat", "Jakarta");
$person->name = "Mamat";

$person->sayHello("Bambang");

$person->info();

// var_dump($person);