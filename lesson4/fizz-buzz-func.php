<?php

function fizz_buzz($num1, $num2, $num3) {

    if ($num1 > 0 && $num2 > 0 && $num3 > 0) {

            for ($i = 1; $i <= $num3; $i++) {

                if (!($i % $num1) && !($i % $num2)) echo " " . "FB";
                elseif (!($i % $num1)) echo " " . "F";
                elseif (!($i % $num2)) echo " " . "B";
                else echo " " . $i;

            };

    } else {
        echo "Error!";
    };
};
