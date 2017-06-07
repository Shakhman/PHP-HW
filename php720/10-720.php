<?php

$handle = fopen("php://stdin", "r");
$year = fgets($handle);


function get_china_year_name () {
    global $year;

    if ($year >= 1924) {

        $china_years = [
            "Крыса",
            "Бык",
            "Тигр",
            "Кролик",
            "Дракон",
            "Змея",
            "Лошадь",
            "Овца",
            "Обезьяна",
            "Петух",
            "Собака",
            "Свинья"
        ];

        return $china_years[($year - 1924) % 12] . PHP_EOL;

    } else {
        echo "Error" . PHP_EOL;
    }
};

echo get_china_year_name();
