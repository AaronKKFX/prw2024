<?php

$n = explode(" ",str_replace("\n","",readline()));

$a = $n[0];
$b = $n[1];
$c = $n[2];
sort($n);
echo implode ("\n", $n);
echo "\n\n";
echo "$a\n$b\n$c\n";
?>