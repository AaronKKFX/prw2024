<?php

$n =intval(fgets(STDIN));

$v1 = array();
$v1 = explode(" ", fgets(STDIN));
$menor = $v1[0];

for($i=0;$i<$n;$i++)
{
    if($v1[$i]< $menor)
    {
        $menor = $v1[$i];
        $pos = $i;
    }
    
}
echo "Menor valor: ".$menor."\n";
echo "Posicao: ".$pos."\n";
?>