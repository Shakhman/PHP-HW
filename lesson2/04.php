<?php

echo "Did you spend a good time?\nPress Y if you agree: ";

$handle = fopen("php://stdin", "r");
$answer = fgets($handle);

// var_dump($answer);

// echo gettype($answer);
// echo "$answer\n";
// echo substr($answer, 0, 0);
// echo "\n";
// var_dump(substr($answer, 0, -1));

//echo ($answer == "Y") ? "My congratulations!!!" : "Sorry fo that!";
echo (substr($answer, 0, -1) == "Y" || substr($answer, 0, -1) == "y") ? "\033[32;1mMy congratulations!!!\033[0m" : "Sorry fo that!";

echo "\n";
