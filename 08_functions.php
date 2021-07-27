<?php

// Function which prints "Hello I am Zura"
/* function hello() {
    echo 'hello, im prle' . '<br>';
}
hello(); */
// Function with argument
/* function hello($name) {
    return "hello, i am $name" . '<br>';
}
echo hello("bela");
echo hello("prle");
echo hello("mladen"); */

// Create sum of two functions
/* function sum($a, $b) {
    return $a + $b;
}

echo sum(4, 5); */

// Create function to sum all numbers using ...$nums
/* function sum(...$nums) {
    $sum = 0;
    foreach($nums as $num) {
        $sum += $num;
    }
    return $sum;
}

echo sum(1,2,3,4,5,6); */

// Arrow functions
function sum(...$nums) {
return array_reduce($nums, fn($carry, $num) => $carry + $num);
}

echo sum(1,2,3,4,5,6);
