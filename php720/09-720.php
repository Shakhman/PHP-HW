<?php

$handle = fopen("php://stdin", "r");
$card = fgets($handle);

$cards = [
    "2" => "02",
    "3" => "03",
    "4" => "04",
    "5" => "05",
    "6" => "06",
    "7" => "07",
    "8" => "08",
    "9" => "09",
    "10" => "10",
    "jack" => "11",
    "queen" => "12",
    "king" => "13",
    "ace" => "14",
    "joker" => "15"
];

function get_rank() {
    global $cards, $card;

    $card = rtrim($card);
    $output = '';

    foreach ($cards as $name => $rank) {

        if ($card == $name) {
            $output .= $rank;
        }

    }

    if (!$output) {
        echo "The Card $card is undefined" . PHP_EOL;
    } else {
        return "Your rank is " . $output . PHP_EOL;
    }

};

echo get_rank();
