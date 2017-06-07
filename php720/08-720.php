<?php

date_default_timezone_set('Europe/Kiev');

$handle = fopen("php://stdin", "r");
$year = fgets($handle);

//$year = (int) $year;

function is_leap() {
    global $year;

    // #1 Variant

    // if (checkdate(2, 29, $year)) {
    //     echo "Is Leap!" . PHP_EOL;
    // } else {
    //     echo "Is not leap" . PHP_EOL;
    // }

    // #2 Variant

    if (!($year % 4) && ($year % 100 || !($year % 400))) {
        echo "Is Leap!" . PHP_EOL;
    } else {
        echo "Is not leap" . PHP_EOL;
    }

};

echo is_leap();
