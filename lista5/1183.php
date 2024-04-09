<?php

$opera = readline(); // operação soma ou media
$op = 0; // op resultado final declarado
$matriz = []; // declaração da matriz
for($i=0; $i<12;$i++) // $i = linhas da matriz
{
    for($j=0; $j<12; $j++)// $j = coluna da matriz
    {
        $matriz[$i][$j] = floatval(readline());
    }
}
for($i=0; $i<12; $i++)//linhas seguem normais
{
    for($j = $i+1; $j<12; $j++)//a coluna passa a ser contabilizada apos sua coluna + 1
    {
        $op += $matriz[$i][$j];//matriz contablizada
    }
}
if($opera == "M")//caso seja media
{
    $op /= 66;// 66 pois somente 66 numeros de 144 serao contabilizados
}
echo number_format($op,1,".","")."\n";//formatação do numero

?>