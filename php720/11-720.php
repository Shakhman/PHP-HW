<?php

$handle = fopen("php://stdin", "r");

$n = fgets($handle);

function show_sqrt_of_ints() {
    global $n;

    $sum = 0;

    for ($i = 1; $i <= $n; $i++) {

        echo $i_pow = pow($i, $i) . PHP_EOL;
        $sum += $i_pow;


    }

    return "Sum - " . $sum . PHP_EOL;
}

echo show_sqrt_of_ints();
