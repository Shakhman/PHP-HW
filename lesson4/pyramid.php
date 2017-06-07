<?php


function pyramid($num) {

    for ($i = 1; $i <= $num ; $i++) {

        if ($i < 10) {
            echo str_repeat(" ", $num - $i);
            echo rtrim(str_repeat("$i  ", $i));
            echo "\n";
        } else {
            echo str_repeat(" ", $num - $i);
            echo rtrim(str_repeat("$i ", $i));
            echo "\n";
        }
    }
}


pyramid(22);
