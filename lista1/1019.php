<?php
$N = intval(readline());

$H = floor($N/3600); //divisão da hora//
$M = floor(($N%3600)/60); //resto da hora dividido por 60 para calculo dos minutos//
$S = floor(($N%3600)%60); // resto dos minutos do restos das horas para calculo dos segundos//

echo $H.":".$M.":".$S."\n";
?>
