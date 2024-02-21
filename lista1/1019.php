<?php
$N = intval(readline());

$H = floor($N/3600);
$M = floor(($N%3600)/60);
$S = floor(($N%3600)%60);

echo $H.":".$M.":".$S."\n";
?>
