<?php
$n = readline();
for($c=0; $c<$n; $c++)
{
    $array = [6,2,5,5,4,5,6,3,7,6];
    $num = readline();
    $t = 0;
    for($i=0;$i <=9; $i++)
    {
        $oc = substr_count($num,strval($i));
        $t += $array[$i] * $oc;
    }
    echo $t." leds\n";
}

?>