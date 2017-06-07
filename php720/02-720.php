<?php

$handle = fopen("php://stdin", "r");

$num = fgets($handle);

$int = fgets($handle);

function count_int() {
    global $num;
    global $int;

    $int = rtrim($int);
    $num = rtrim($num);
    $count = 0;

    // var_dump($num) . PHP_EOL;
    // var_dump($int) . PHP_EOL;

    for ($i = 0; $i <= strlen($num); $i++) {

        if ($num[$i] == $int) {
            $count += 1;
        }

    }

    return $count . PHP_EOL;

};

echo count_int();
