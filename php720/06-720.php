<?php

$handle = fopen("php://stdin", "r");
$degree = fgets($handle);

function get_hour() {
    global $degree;

    $sum = 0;

    if ($degree <= 360) {

        for ($i = 0; $i < $degree; $i += 30) {
            $sum += 1;
        };

        return $sum . PHP_EOL;

    } else {
        echo "Error" . PHP_EOL;
    }

};


echo get_hour();
