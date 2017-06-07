<?php

echo "<pre>";
// #1

$names = ['foo', 'bar', 'fizz', 'buzz'];

function sayHello ($name) {
    return "Hello, " . ucwords($name)  . "!\n";
};

print_r(implode("", array_map("sayHello", $names)));

echo "\n";


// #2

function piramide($int) {

    for($i = 1; $i <= $int; $i++) {

        if ($i < 10) {
            echo str_repeat(" ", $int - $i);
            echo rtrim(str_repeat("$i  ", $i));
            //echo str_repeat(" ", $int - $i);
            echo "<br/>";
        } else {
            echo str_repeat(" ", $int - $i);
            echo rtrim(str_repeat("$i ", $i));
            //echo str_repeat(" ", $int - $i);
            echo "<br/>";
        }



    };
};

print_r(piramide(99));

echo "</pre>";
