<?php

$v1 = array();

for($i=0; $i<10;$i++)
{
    $v1[$i] = intval(readline());
    
    if($v1[$i] <= 0)
    {
        $v1[$i] = 1;
        echo "X[".$i."] = ".$v1[$i]."\n";
    }
    else {
        echo "X[".$i."] = ".$v1[$i]."\n";
    }
}
?>