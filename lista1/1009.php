<?php

$NOME = readline();
$SALARY = floatval(readline());
$VENDAS = floatval(readline());

$TOTAL = $SALARY + (15 * $VENDAS)/100;

echo "TOTAL = R$ ".number_format($TOTAL,2,".","")."\n";
?>