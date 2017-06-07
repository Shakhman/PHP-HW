<?php

echo "Press your sentence to palindrome: ";

$handle = fopen("php://stdin", "r");
$s = fgets($handle);

$words = explode(' ', $s); // return Array

var_dump($words);
echo "\n";

$words = array_reverse($words);

var_dump($words);
echo "\n";

// View doc about this function
$s = implode(' ',$words);

echo $s;
