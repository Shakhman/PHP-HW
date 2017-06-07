<?php

$handle = fopen("php://stdin", "r");

// Select first number

echo "Press your first number: ";
$foo = fgets($handle);

// Select second number

echo "Press your second number: ";
$buzz = fgets($handle);

// Select quantity of numbers

echo "Press quantity of numbers: ";
$quantity = fgets($handle);

// Looping all conditions

for ($i = 1; $i <= $quantity; $i++) {
    switch($i) {
        case (!(($i % $foo)) && (!($i % $buzz))):
            echo "\033[32;1mFB\033[0m"." ";
            break;
        case (!($i % $foo)):
            echo "\033[36;1mF\033[0m"." ";
            break;
        case (!($i % $buzz)):
            echo "\033[33;1mB\033[0m"." ";
            break;
        default: echo "$i"." ";
    };
};

echo "\n";
