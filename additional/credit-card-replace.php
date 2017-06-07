<?php
echo "Press yout credit card number: ";

$handle = fopen("php://stdin", "r");

$creditCard = fgets($handle);

$xxxx = substr_replace($creditCard, 'xxxx ', 0, strlen($creditCard)-5);

echo $xxxx;

echo $creditCard;
