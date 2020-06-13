<?php
  
$Cambodia =2103942 ;
$Myanmar =19092 ;
$Norway= 109 ;
$Albania =9094 ;
echo "At the start of your transaction you had $Cambodia riel, $Myanmar kyat, $Norway krones, and $Albania lek.";
$Cambodia_to_usd = 0.00026;
$Myanmar_to_usd = 0.00066;
$Norway_to_usd = 0.11;
$Albania_to_usd =  0.0090;

$usd_from_Cambodia = $Cambodia * $Cambodia_to_usd;

$usd_from_Myanmar = $Myanmar * $Myanmar_to_usd;

$usd_from_Norway = $Norway * $Norway_to_usd;

$usd_from_Albania = $Albania * $Albania_to_usd;

echo "\nYour $Cambodia riel were exchanged for $usd_from_Cambodia usd.";

echo "\nYour $Myanmar riel were exchanged for $usd_from_Myanmar usd.";

echo "\nYour $Norway riel were exchanged for $usd_from_Norway usd.";

echo "\nYour $Albania riel were exchanged for $usd_from_Albania usd.";

$final_amount = $usd_from_Cambodia + $usd_from_Myanmar + $usd_from_Norway + $usd_from_Albania - 4;
echo "\nAfter deducting the transactions fees, you'll be recieving $final_amount usd.";

