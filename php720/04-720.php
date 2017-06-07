<?php

$arr = [];

function max_min_value_arr (&$arr) {

    for ($i = 0; $i <= 10; $i++) {
        //array_push($arr, rand());
        $arr[] = rand(1, 10);
    }

    $arr[0] = max($arr);
    $arr[count($arr) - 1] = min($arr);

    return $arr;
}

print_r(max_min_value_arr($arr));
