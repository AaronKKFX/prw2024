<?php

$s = floatval(readline());


if($s<=400.00)
{
    $r=number_format((($s*15)/100),"2",".","");
    $s=number_format(($s+$r),"2",".","");
    $p=15;
}
else if($s>400.00 && $s<=800.00)
{
    $r=number_format((($s*12)/100),"2",".","");
    $s=number_format(($s+$r),"2",".","");
    $p=12;
}
else if($s>800.00 && $s<=1200.00)
{
    $r=number_format((($s*10)/100),"2",".","");
    $s=number_format(($s+$r),"2",".","");
    $p=10;
}
 else if($s>1200.00 && $s<=2000.00)
{
    $r=number_format((($s*7)/100),"2",".","");
    $s=number_format(($s+$r),"2",".","");
    $p=7;
}
else if($s>2000.00)
{
    $r=number_format((($s*4)/100),"2",".","");
    $s=number_format(($s+$r),"2",".","");
    $p=4;
}

echo "Novo salario: ".$s."\nReajuste ganho: ".$r."\nEm percentual: ".$p." %\n";
?>