<?php

function bit_position($num, $p1, $p2) {
    $binary = decbin($num);

    var_dump($binary);
    var_dump($binary[$p1]);
    var_dump($binary[$p2]);

    if ($binary[$p1] === $binary[$p2]){
        return true;
    } else {
        return false;
    }
}

var_dump(bit_position(223, 0, 3));
