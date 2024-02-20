<?php

$COD = intval(readline());
$NUM = intval(readline());
$VAL = floatval(readline());
$COD2 = intval(readline());
$NUM2 = intval(readline());
$VAL2 = floatval(readline());

$VALOR = ($NUM*$VAL)+($NUM2*$VAL2);

echo "VALOR A PAGAR: R$ ".number_format($VALOR,2,".","")

?>