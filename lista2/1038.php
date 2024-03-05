<?php
$N = explode(" ",fgets(STDIN));

$c = $N[0];

switch($c)
{
case 1: echo "Total: R$ ".number_format(($N[1]*4.00),2,".","")."\n";
break;
case 2: echo "Total: R$ ".number_format(($N[1]*4.50),2,".","")."\n";
break;
case 3: echo "Total: R$ ".number_format(($N[1]*5.00),2,".","")."\n";
break;
case 4: echo "Total: R$ ".number_format(($N[1]*2.00),2,".","")."\n";
break;
case 5: echo "Total: R$ ".number_format(($N[1]*1.50),2,".","")."\n";
}
?>
