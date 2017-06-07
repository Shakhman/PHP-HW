<?php

function str_random($lenght, $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ') {
    if (!is_int($lenght) || $lenght < 0) {
        return false;
    };
    $character_len = strlen($characters) - 1;

    $string = "";
    for ($i = $lenght; $i > 0; $i--) {
        $string .= $characters[mt_rand(0, $character_len)];
    };

    return $string;

    //var_dump($character_len);


};

var_dump(str_random(44));
