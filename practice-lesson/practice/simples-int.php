<?php

$arr = [];
$i = 2;
$cn = 0;

function is_prime($number, $arr){

    foreach ($arr as $value) {

        if ($value > ceil($number / 2)) {
            return true;
        }

        if ($number % $value == 0) {
            return false;
        }

    }

	return true;
}

while(true){

	if(is_prime($i, $arr)){
		array_push($arr, $i);
		$cn++;
	}

	if($cn == 100){
		break;
	}

	$i++;
}
$result = array_values($arr);
print_r($result);
