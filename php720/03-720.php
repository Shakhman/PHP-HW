<?php

$handle = fopen("php://stdin", "r");

$minNum = fgets($handle);
$maxNum = fgets($handle);

function find_no_rest () {
    global $minNum, $maxNum;

    $minNum = rtrim($minNum);
    $maxNum = rtrim($maxNum);

    $minNum = (int) $minNum;
    $maxNum = (int) $maxNum;

    $count = 0;

    for ($i = $minNum; $i <= $maxNum; $i++) {

            if (fmod($i, 5) == 0) {
                $count += 1;
                echo "Yes " . $i . PHP_EOL;
            } else {
                echo "No " . $i . PHP_EOL;
            }
    }

    return $count . PHP_EOL;
}

echo find_no_rest();
