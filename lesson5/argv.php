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

// Open File
$handle = fopen($argv[1]. ".txt", "$argv[2]");

// Reading all strokes
while(!feof($handle)) {

    $file  = fgets($handle);

    //Create Arrays
    $file = explode(" ", $file);

    // Array values into Int
    $file[0] = (int) $file[0];
    $file[1] = (int) $file[1];
    $file[2] = (int) $file[2];

    // Call Function
    echo fizz_buzz($file[0], $file[1], $file[2]) . "\n" . "\n";


};



// Close File
fclose($handle);
