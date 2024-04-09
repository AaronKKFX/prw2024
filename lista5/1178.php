<?php

$v1 = array();
$v = floatval(fgets(STDIN));

for($i=0; $i<100;$i++)
{
    $v1[0] = $v;
    if($i == 0)
    {
        $v1[$i] = number_format($v,4,".","");
        echo "N[".$i."] = ".$v1[$i]."\n";
    }
    else {
        $vn =$v1[$i-1] / 2 ;
        $v1[$i]=$vn;
        echo "N[".$i."] = ".number_format($vn,4,".","")."\n";
    }
}
?>