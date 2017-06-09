<?php

function trafic_light($minute) {

    $result = [];
    $result[0] = null;

    for ($i = 1; $i <= 60; $i += 5) {

        for ($j = 1; $j <= 5; $j++) {

            if ($j <= 3) {
                array_push($result, "Green");
            } elseif ($j > 3 && $j <= 5) {
                array_push($result, "Red");
            }
        }


    }

    return $result[$minute];
}

var_dump(trafic_light(50));
