<?php

$e = explode (" ",fgets(STDIN));

$A = floatval($e[0]);//transformando o $e em float para variavel funcionar em função abs//
$B = floatval($e[1]);
$C = floatval($e[2]);

$MAIORAB = ($A + $B + abs($A-$B))/2;

$MAIORABC = ($MAIORAB + $C + abs($MAIORAB - $C))/2;

echo $MAIORABC." eh o maior\n";
?>