<?php

foreach ([5, '5', '05', 12.3, '16.7', 'five', 0xDECAFBAD, '10e200'] as $maybeNumber) {

    $isItNumeric = is_numeric($maybeNumber);
    $actualType = gettype($maybeNumber);
    print "Is it $actualType $maybeNumber numeric? ";

    if ($isItNumeric) {
        print "Yes";
    } else print "No!";
    print "<br/>";
};

?>
