<?php

$arr = [];
$arr[4] = 1;
$arr[8] = 2;

var_dump($arr);

function arr_sort(&$arr) {
    $arr = sort($arr);
    return var_dump($arr);
};

arr_sort($arr);
