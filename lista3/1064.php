<?php

$i=0;
while($i<=6)
{
    $n = floatval(readline());
    if($n>0)
    {
        $i++;
        $p++;
        $m += $n;
    }
    else
    {
        $i++;
    }
}
echo "$p valores positivos\n";
echo number_format($m/$p,"1",".","")."\n";
?>