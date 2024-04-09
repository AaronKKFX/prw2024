<?php

$v1 = array();
$v = intval(fgets(STDIN));

for($i=0; $i<10;$i++)
{
    $v1[0] = $v;
    if($i == 0)
    {
        $v1[$i] = $v;
        echo "N[".$i."] = ".$v1[$i]."\n";
    }
    else {
        $vn = $v1[$i-1] * 2;
        $v1[$i]=$vn;
        echo "N[".$i."] = ".$vn."\n";
    }
}
?>