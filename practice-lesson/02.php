<?php

$arr = [
    "Ivanov" => [5, 2, 3, 5, 5,],
    "Petrov" => [2, 3, 4, 4, 4,],
    "Pupkin" => [4, 3, 4, 5,],
    "Dyatlov" => [4, 2, 1, 1,],
    "Durnev" => [2, 3, 4,]
];

$result = array_map(function($value) {
    return array_sum($value) / count($value) . "\n";
}, $arr);

$result;


//

function sum(...$numbers) {
    $sum = 0;

    foreach($numbers as $n) {
        $sum += $n;
    }

    return $sum;
}

var_dump(sum(2,4,2,3,5,6,7,7,7,7,7,7,7,7,7,7,2,32,32,32,32,1000000));

echo "\n";
