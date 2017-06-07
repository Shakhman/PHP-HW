<?php

function multiples($sum, $n) {
    for ($i = 1; $i <= $sum; $i++) {

        if ($i * $n == $sum) {
            echo $i;
            break;
        } elseif ($i == $sum) {
            echo "Nothing!";
        }

    }

    return $i;
}

multiples(6, 6);

echo "\n";
