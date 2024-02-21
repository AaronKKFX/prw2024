<?php

$p1 = explode(" ",fgets(STDIN));
$p2 = explode(" ",fgets(STDIN));

$x1 = floatval($p1[0]);
$y1 = floatval($p1[1]);
$x2 = floatval($p2[0]);
$y2 = floatval($p2[1]);

$DIS = number_format(sqrt(pow($x2-$x1,2)+ pow($y2-$y1,2)),4,".","");

echo $DIS."\n"
?>