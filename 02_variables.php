<?php

// What is a variable

// Variable types
// STRING, INT, BOOLEAN, FLOAT/DOUBLE, NULL, ARRAY, OBJECT, RESOURCE

// Declare variables
$name = 'Prle';
$age = 30;
$isMale = true;
$height = 1.88;
$salary = null;

// Print the variables. Explain what is concatenation
echo $name.'<br>';
echo $age.'<br>';
echo $isMale.'<br>';
echo $height.'<br>';
echo $salary.'<br>';

// Print types of the variables
echo gettype($name).'<br>';
echo gettype($age).'<br>';
echo gettype($isMale).'<br>';
echo gettype($height).'<br>';
echo gettype($salary).'<br>';

// Print the whole variable
var_dump($name, $age, $isMale, $salary, $height);

// Change the value of the variable
$name = true;

// Print type of the variable
echo gettype($name);

// Variable checking functions
is_string($name); // false
is_int($age); // true
is_bool($isMale); // true
is_double($height); // true

// Check if variable is defined
isset($name); // true
isset($address); // false

// Constants
define('PI', 3.14);
echo PI.'<br>';
echo SORT_ASC.'<br>';
echo PHP_INT_MAX.'<br>';

// Using PHP built-in constants
