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
////////////////////////////////////////////////////////////////////////////////////////////////////////

for($i=0; $i<5; $i++)//linhas contabilizadas somente ate a linha 5
{
    for($j = 10 -$i ; $j > $i  ; $j--)//colunas contadas de tras para frente limitando-as em sua quantidade -i a cada passagem
    {// tendo que ser maior que i 
        $op += $matriz[$i][$j];//matriz contablizada
    }
}
if($opera == "M")//caso seja media
{
    $op /= 30;// 30 pois somente 30 numeros de 144 serao contabilizados
}
echo number_format($op,1,".","")."\n";//formatação do numero

?>