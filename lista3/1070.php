<?php
$c = intval(readline());

$i=$c+12;

while($c< $i)
{
    if($c%2 == 0)
    {
        $c ++;
    }
    else
    {
        echo $c."\n";
        $c++;
    }
}
?>