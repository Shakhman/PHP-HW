<?php

$handle = fopen("php://stdin", "r");

$num = fgets($handle);

function sum_nums() {
    global $num;

    $sum = 0;

    $num = str_split(rtrim($num));

    //var_dump($num);

    foreach ($num as &$value) {
        $sum += $value;
    };

    return $sum . "\n";
};

var_dump(sum_nums());

?>
