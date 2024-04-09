<?php

$coluna = intval(readline()); //entra valor que indica a coluna
$t = readline(); //entra valor que indica a operação
$op = 0; //definido valor a variavel do resultado
$matriz = []; //matriz

for($i=0; $i<12; $i++)// $i representa linha
{
    for($j=0; $j<12; $j++)// $j representa coluna
    {
        $matriz[$i][$j] = floatval(readline());
    }
}

for($i=0; $i<12; $i++)//repetir 12 vezes a soma dos elementos condizentes a matriz
{
    $op += $matriz[$i][$coluna];//$coluna = coluna escolhida
}

if($t == "M") // caso seja media
{
    $op /= 12;
}

echo number_format($op,1,".","")."\n";

?>