<?php

$handle = fopen("php://stdin", "r");

$lastName = fgets($handle);
$firstName = fgets($handle);
$middleName = fgets($handle);


function get_fullname() {
    global $lastName, $firstName, $middleName;

    $lastName = rtrim($lastName);
    $firstName = rtrim(substr($firstName, 0, 1) . ".");
    $middleName= rtrim(substr($middleName, 0, 1) . ".");

    $fullName = $lastName . " " . $firstName . $middleName;

    return ucwords($fullName) . PHP_EOL;

};
echo get_fullname();
