<?php
$c = intval(readline());
$i=1;

while($i<=$c)
{
    if($i%2 == 0)
    {
        echo $i."^2 = ".$i*$i."\n";
        
    }
    $i ++;
}
?>