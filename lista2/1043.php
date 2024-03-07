<?php

list($a, $b, $c) = explode(' ',fgets(STDIN));

if($a< $b+$c && $a>$b - $c)
{
     $pt = number_format($a+$b+$c,1,".","");
    echo "Perimetro = ".$pt."\n";
}
else {
    $at= number_format((($a+$b)*$c)/2,1,".","");
    echo "Area = ".$at."\n";
}
?>