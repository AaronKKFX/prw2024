<?php

$n = intval(readline());

for($i=0; $i<$n; $i++)
{
    $entrada = explode(" ", readline());
    $qtd = $entrada[0];
    $t = $entrada[1];
    $total += $qtd;
    
    if($t == "C")
    {
        $c += $qtd;
    }
    else if($t == "R")
    {
        $r += $qtd;
    }
    else if($t == "S")
    {
        $s += $qtd;
    }
}
$pc = number_format(($c/$total)*100,2,".","");
$pr = number_format(($r/$total)*100,2,".","");
$ps = number_format(($s/$total)*100,2,".","");

echo "Total: ".$total." cobaias\n";
echo "Total de coelhos: ".$c."\n";
echo "Total de ratos: ".$r."\n";
echo "Total de sapos: ".$s."\n";
echo "Percentual de coelhos: ".$pc." %\n";
echo "Percentual de ratos: ".$pr." %\n";
echo "Percentual de sapos: ".$ps." %\n";
?>