<?php

echo "Press your age: ";

$handle = fopen("php://stdin", "r");
$age = fgets($handle);

echo "Your age is: $age";

if ($age >= 21) echo "\033[32;1mYou have a full access! \033[0m";
    elseif (($age >= 18) && ($age < 21)) echo "\033[36;1mYou have a partial access! \033[0m";
    else echo "\033[31;1mAccess denied!!! \033[0m";

echo "\n";
