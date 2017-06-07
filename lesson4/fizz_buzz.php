<?php

function fizz_buzz($num1, $num2, $num3) {

    if ($num1 > 0 && $num2 > 0 && $num3 > 0) {

            for ($i = 1; $i <= $num3; $i++) {

                if (!($i % $num1) && !($i % $num2)) echo " " . "FB";
                elseif (!($i % $num1)) echo " " . "F";
                elseif (!($i % $num2)) echo " " . "B";
                else echo " " . $i;

            };

    } else {
        echo "Error!";
    };
};

$handle = file("fizz_buzz.txt", FILE_SKIP_EMPTY_LINES | FILE_IGNORE_NEW_LINES);

$file = implode(" ", $handle);
$file = explode(" ", $file);

foreach($file as &$values) {
    $values = (int) $values;
};

fizz_buzz($file[3], $file[6], $file[2]);

echo "\n";
