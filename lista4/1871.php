<?php

for($i=0;$i<=$i;$i++)
{
    
    list($n1,$n2) = explode(" ", readline());
    if($n1 !=0 and $n2!=0)
    {
    $s=$n1+$n2;
    $x = str_replace("0","",$s);
    echo $x."\n";
    }
    else
    {
        break;
    }
}
?>