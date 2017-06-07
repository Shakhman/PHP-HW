<?php

// Fizz Buzz in CLI

$handle = fopen("php://stdin", "r");

echo "Input first number: ";
$num1_cli = fgets($handle);

echo "Input second number: ";
$num2_cli = fgets($handle);

echo "Input third number: ";
$num3_cli = fgets($handle);

function fizz_buzz_cli($num1_cli, $num2_cli, $num3_cli) {

    $num1_cli = (int) $num1_cli;
    $num2_cli = (int) $num2_cli;
    $num3_cli = (int) $num3_cli;

    if ($num1_cli > 0 && $num2_cli > 0 && $num3_cli > 0) {

        for ($i = 1; $i <= $num3_cli; $i++) {

            if (!($i % $num1_cli) && !($i % $num2_cli)) echo "FB" . " ";
            elseif (!($i % $num1_cli)) echo "F" . " ";
            elseif (!($i % $num2_cli)) echo "B" . " ";
            else echo $i . " ";

        };
    } else echo "Error!!!!!!";
};

echo fizz_buzz_cli($num1_cli, $num2_cli, $num3_cli);
echo "\n";
