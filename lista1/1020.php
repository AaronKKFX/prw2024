<?php
$id = intval(readline());

$a= floor($id/365);
$m= floor(($id%365)/30);
$d= floor(($id%365)%30);

echo $a." ano(s)\n";
echo $m." mes(es)\n";
echo $d." dia(s)\n";
?>