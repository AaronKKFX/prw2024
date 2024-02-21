<?php
$id = intval(readline());

$a= floor($id/365); // divisão para anos//
$m= floor(($id%365)/30); //resto da divisão dos anos dividido por 30 para calculo do mes//
$d= floor(($id%365)%30); //resto dos meses dos restos dos anos para calculo do dia//

echo $a." ano(s)\n";
echo $m." mes(es)\n";
echo $d." dia(s)\n";
?>