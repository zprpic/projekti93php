<?php

// Create array
$fruits = ['Banana', 'Apple', 'Orange'];

// Print the whole array
echo '<pre>';
var_dump($fruits);
echo '</pre>';

// Get element by index
echo $fruits[1].'<br>';

// Set element by index
$fruits[0] = 'Peach';
echo '<pre>';
var_dump($fruits);
echo '</pre>';

// Check if array has element at index 2
isset($fruits[2]); // true

// Append element
$fruits[] = 'Banana';
echo '<pre>';
var_dump($fruits);
echo '</pre>';

// Print the length of the array
echo count($fruits).'<br>';

// Add element at the end of the array
array_push($fruits, 'Lemon');
echo '<pre>';
var_dump($fruits);
echo '</pre>';

// Remove element from the end of the array
array_pop($fruits);
echo '<pre>';
var_dump($fruits);
echo '</pre>';

// Add element at the beginning of the array
array_unshift($fruits, 'Grapes');
array_pop($fruits);
echo '<pre>';
var_dump($fruits);
echo '</pre>';

// Remove element from the beginning of the array
array_shift($fruits);

// Split the string into an array
$string = "1, 2, 3";
echo '<pre>';
var_dump(explode(",", $string));
echo '</pre>';

// Combine array elements into string
echo '<pre>';
echo implode("&", $fruits);
echo '</pre>';

// Check if element exist in the array
echo '<pre>';
var_dump(in_array("Apple", $fruits));
echo '</pre>';

// Search element index in the array
echo '<pre>';
var_dump(array_search("Apple", $fruits));
echo '</pre>';

// Merge two arrays
$vegetables = ["Potato", "Cucumber"];
$food = array_merge($fruits, $vegetables);
echo '<pre>';
var_dump($food);
var_dump([...$fruits, ...$vegetables]);
echo '</pre>';

// Sorting of array (Reverse order also)
sort($fruits);
var_dump($fruits);
echo '</pre>';


// https://www.php.net/manual/en/ref.array.php

// ============================================
// Associative arrays
// ============================================

// Create an associative array
$person = [
    'name' => 'Prle',
    'surname' => 'Prpic',
    'age' => 30,
    'hobbies' => ['Tennis', 'Videogames']
];
echo '<pre>';
var_dump($person);
echo '</pre>';

// Get element by key
echo $person['name'].'<br>';

// Set element by key
echo $person['channel'] = 'YouTubePrle';
echo '<pre>';
var_dump($person);
echo '</pre>';

// Null coalescing assignment operator. Since PHP 7.4
/* if (!isset($person['address'])) {
    $person['address'] = 'unknown';
} */
$person['address'] ??= 'unknown';

var_dump($person);

// Check if array has specific key


// Print the keys of the array
echo '<pre>';
var_dump(array_keys($person));
echo '</pre>';
// Print the values of the array
echo '<pre>';
var_dump(array_values($person));
echo '</pre>';

// Sorting associative arrays by values, by keys
asort($person);
echo '<pre>';
var_dump($person);
echo '</pre>';

// Two dimensional arrays
$todos = [
    ['title' => 'Todo title1', 'completed' => true],
    ['title' => 'Todo title2', 'completed' => false],
    ['title' => 'Todo title3', 'completed' => true],

];
echo '<pre>';
var_dump($todos);
echo '</pre>';