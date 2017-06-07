<?php

    function pick_color () {
        $colors = array('red','orange','yellow','blue','green','indigo','violet');
        $i = mt_rand(0, count($colors) - 1); // Count for Arrays or Objects;
        return $colors[$i];
    };

    mt_srand(34534);

// Так как mt_srand() передается конкретное значение, каждый раз
// будут выбираться одни и те же цвета: красный (red) и желтый (yellow)

    $first = pick_color();
    $second = pick_color();

    print "$first is red and $second is yellow.";

?>
