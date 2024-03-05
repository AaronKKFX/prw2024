<?php

list($a, $b, $c) = explode(' ',fgets(STDIN));

if($b+$c == $a)
{
     $pt = number_format($a+$b+$c,1,".","");
    echo "Perimetro = ".$pt."\n";
}
else if($b+$c <= $a) {
    $at= number_format((($a+$b)*$c)/2,1,".","");
    echo "Area = ".$at."\n";
}
?>