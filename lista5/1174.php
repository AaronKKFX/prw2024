<?php

$v1 = array();

for($i=0; $i<100;$i++)
{
    $v1[$i] = number_format(floatval(fgets(STDIN)),1,".","");
    if($v1[$i] <= 10)
    {
        echo "A[".$i."] = ".$v1[$i]."\n";
    }
}
?>