<?php

// String
$string = "I am string.\n";
echo $string;
strlen($string); // return length of string.
str_word_count($string); // counts the # of words in string.
strrev($string); // reverses a string.
strpos($string, "am"); // searches for a specific text within a string.
str_replace("I", "You", $string); //replace "I" with "you".

// integer
$int = 250;
var_dump($int); // returns the data type and value;

// float
$float = 10.364;
var_dump($float);

// boolean
$bool1 = false;
$bool2 = true;

// array
$nums = array(1, 2, 3);
var_dump($nums);

// class
class Car
{
    function Car()
    {
        $this->model = "VW";
    }
}
//create an object
$firstCar = new Car();
//show object properties
echo $firstCar->model . "\n";

// null
$null; // equal to $null = null
var_dump($null); // return NULL

// constant
// define(name, value, case-insensitive)
// constant is global var
define("GREETING", "Welcome!"); // third parameter default is false. Means greeting != GREETING.
echo GREETING;
define("GREETING2", "Welcome", "true"); // third parameters is true, greeting == GREETING.
echo greeting2;

// php7 constant array
/*
 * define("cars",["BMW", "Toyota", "QQ"]);
 * echo cars[0];
 */

/*
Operator same as Java except ** is power.
*/