<?php

$opera = readline(); // operação soma ou media
$op = 0; // op resultado final declarado
$matriz = []; // declaração da matriz
for($i=0; $i<12;$i++) // $i = linhas da matriz
{
    for($j=0; $j<12; $j++)// $j = coluna da matriz
    {
        $matriz[$i][$j] = doubleval(readline());
    }
}
////////////////////////////////////////////////////////////////////////////////////////////////////////
$aux1 = 1;//auxiliar pois não se pode contabilizar diretamente no for variaveis determinantes de um for
$aux2 = 11;//mesma coisa do de cima

for($j=11; $j>6; $j--)//coluna cotabilizada de tras pra frente até a linha 6
{
    for($i = $aux1 ; $i < $aux2  ; $i++)//linhas determinadas por uma piramide ali embaixo explica
    {
        $op += $matriz[$i][$j];//matriz contablizada
    }
    $aux1 += 1; //+1 pois segue uma reta diagonal
    $aux2 -= 1; //-1 para formar a piramide
}
if($opera == "M")//caso seja media
{
    $op /= 30;// 30 pois somente 30 numeros de 144 serao contabilizados
}
echo number_format($op,1,".","")."\n";//formatação do numero

?>