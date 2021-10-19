<?php 

class Person
{
    const AUTHOR = "Zaid Hilmi";
    
    var $name;
    var $address;
    var $country;

    function __construct($name, $address)
    {
        $this->name = $name;
        $this->address = $address;
    }

    function __destruct()
    {
        echo "Object person $this->name is destroyed.";
    }

    function info()
    {
        echo "Author : " . self::AUTHOR;
    }

    function sayHello($name)
    {
        echo "Hello $name, my name is $this->name";
    }
}