<?php
$c = intval(readline());
$i=1;
while($i<=$c)
{
    if($i%2 == 0)
    {
        $i ++;
    }
    else
    {
        echo $i."\n";
        $i++;
    }
}
?>