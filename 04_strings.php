<?php

// Create simple string
$name = 'prle';
$string = 'hello I am '.$name.' yep, that is my name';
$string2 = "hello I am $name. Nice to meet you "; // "" Double-quotation evalutes variable inside string as $variable

echo $string.'<br>';
echo $string2.'<br>';

// String concatenation
echo 'hello' . 'world' . '!'.'<br>';

// String functions
$string = "     Hello World     ";
echo "1 - " . strlen($string) . "<br>";
echo "2 -" . trim($string) . '<br>'; 
echo "3 -" . ltrim($string) . '<br>'; // With Left Trim function, right side printed out without whitespaces
echo "4 -" . rtrim($string) . '<br>'; // With Right Trim function, left side printed out without whitespaces
                                      // HTML ignores whitespaces when printing. Whitespaces remain in HTML code tho!
echo "5 - " . str_word_count($string) . '<br>';
echo "6 -" . strrev($string) . '<br>';
echo "7 -" . strtoupper($string) . '<br>';
echo "8 -" . strtolower($string) . '<br>';
echo "9 -" . ucfirst("hello") . '<br>';
echo "10 -" . lcfirst("HELLO") . '<br>';
echo "11 -" . ucwords("hello world") . '<br>';
echo "12 -" . strpos($string, "world") . '<br>'; // Word not found! "World" in $string, "world" as parameter.
echo "13 -" . stripos($string, "world") . '<br>'; // stripos($string, 'word') ignores upper/lowercase letters.
echo "14 -" . substr($string, 8, 6) . '<br>';
echo "15 -" . str_replace('World', 'PHP', $string) . '<br>';
echo "16 -" . str_ireplace('world', 'WORLD AND PHP', $string) . '<br>';

 
// Multiline text and line breaks
$longText = "
    Hello, my name is prle
    i'm 30 years old
    i love php
";
echo $longText . '<br>';
echo nl2br($longText) . '<br>';
// Multiline text and reserve html tags
$longText = "
Hello, my name is <b>prle</b>
i'm <b>30</b> years old
i love <b>php</b>
";
echo "1 -" . $longText . '<br>';
echo "2 -" . nl2br($longText). '<br>';
echo "3 -" . htmlentities($longText) . '<br>';
echo "4 -" . nl2br(htmlentities($longText)) . '<br>';
echo "5 -" . html_entity_decode('&lt;b&gt;prle&lt;/b&gt;') .'<br>';
// https://www.php.net/manual/en/ref.strings.php