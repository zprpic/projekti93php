<?php

$age = 20;
$salary = 300000;

// Sample if
if ($age === 20) {
    echo true . '<br>'; // "1"
}
// Without circle braces
if ($age === 20) echo true . '<br>'; // "1"

// Sample if-else
if ($age > 20) {
    echo true;
} else {
    echo false;
}
// Difference between == and ===
if ($age == 20) {
    echo '1' . '<br>';
}
if ($age == '20') {
    echo "2" . '<br>';
}
if ($age === '20') {
    echo "3" . '<br>'; // false
}
// if AND
if ($age > 20 && $salary === 300000) { // false
    echo "Do something";
}

// if OR
if ($age > 20 || $salary === 300000) { // one is true
    echo "Do something" . '<br>';
}

// Ternary if
echo $age < 22 ? 'Young' . '<br>' : 'Old' . '<br>';

// Short ternary
$myAge = $age ?: 18;
var_dump($myAge).'<br>';

// Null coalescing operator
$myName = isset($name) ? $name : 'Prle';
$name ?? 'Prle';

// switch
$userRole = 'webadmin'; // editor, user, admin
switch ($userRole) {
    case 'admin':
        echo 'admin';
        break;
    case 'editor':
        echo 'editor';
        break;
    case 'user':
        echo 'user';
        break;
    default:
        echo 'invalid role';
}