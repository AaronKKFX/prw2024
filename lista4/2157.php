<?php
$c = intval(readline());
for($i = 0; $i<$c; $i++)
{
    list($n1,$n2) = explode(" ", readline());
    
    for($n=$n1;$n<=$n2;$n++)
    {
        echo"$n";
    }
    for($a=$n2; $a>=$n1; $a--)
    {
        echo strrev($a);
    }
    echo"\n";
}
?>