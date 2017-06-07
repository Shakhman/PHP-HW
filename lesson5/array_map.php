<?php

$arr = [
    "Ivanov" => [5, 5, 5, 5, 5,],
    "Petrov" => [2, 3, 4, 4, 4,],
    "Pupkin" => [4, 3, 3, 5, 5],
    "Dyatlov" => [4, 5, 5, 5,],
    "Durnev" => [2, 3, 4, 5, 5],
    "Dunev" => [2, 2, 2, 2, 3],
    "Sidorov" => [3, 3, 3, 2, 3]
];

$str = "has a average mark.";

$result = array_map(function($value) {

    return array_sum($value) / count($value);

}, $arr);

arsort($result, SORT_NUMERIC);

foreach ($result as $name => $marks) {

    switch($marks) {
        case ($marks < 3):
            echo $name . " " . substr($str, 0, 6) . "\033[31m" . $marks . "\033[0m" . substr($str, 5) . "\n";
            break;
        case ($marks < 4):
            echo $name . " " . substr($str, 0, 6) . "\033[33m" . $marks . "\033[0m" . substr($str, 5) . "\n";
            break;
        case ($marks < 4.5):
            echo $name . " " . substr($str, 0, 6) . "\033[36m" . $marks . "\033[0m" . substr($str, 5) . "\n";
            break;
        case ($marks <= 5):
            echo $name . " " . substr($str, 0, 6) . "\033[32m" . $marks . "\033[0m" . substr($str, 5) . "\n";
            break;
    };
};
