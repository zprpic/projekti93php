<?php

// Declaring numbers
$a = 5;
$b = 4;
$c = 1.2;

// Arithmetic operations
echo $a + $b + $c.'<br>';

// Assignment with math operators
$a += $b; echo $a.'<br>';

// Increment operator
echo $a++.'$a++ = is first printed (9), then incremented<br>';
echo ++$a.'++$a = is first incremented (10), then printed(11)';
// Decrement operator
echo $a--.'<br>';
echo --$a.'<br>';

// Number checking functions
is_float(1.25); // true
is_double(1.25); // true
is_int(5); // true
is_numeric('3.45'); // true
is_numeric('3g.45'); // false

// Conversion
$stringNumber = '12.34';
$floatNumber = intval($stringNumber);

var_dump($floatNumber);

echo '<br>';

// Number functions
echo 'abs(-15)' . abs(-15).'<br>';
echo 'pow(2, 3)' . pow(2, 3).'<br>';
echo 'sqrt(16)' . sqrt(16).'<br>';
echo 'max(2, 9, 3)' . max(2, 9, 3).'<br>';
echo 'min(2, 3)' . min(2,3).'<br>';
echo 'round(2.4)' . round(2.4).'<br>';
echo 'round(2.6)' . round (2.6).'<br>';
echo 'floor(2.6)' . floor(2.6).'<br>';
echo 'ceil(2.4)' . ceil(2.4).'<br>';

// Formatting numbers
$number = 123456789.12345; // 
echo 'number_format($number, 2, ',', '.')' . number_format($number, 2, '.', ',');

$num = 3;
var_dump($num);
$let = strval($num);
var_dump($let);
$num = 4;
var_dump($num);
var_dump($let);
$let = strval($num);
var_dump(($let));



// https://www.php.net/manual/en/ref.math.php