<?php
$din = intval(readline());

$nc = number_format(floor($din/100),0,",","");
$rc = $din%100;

$nci = number_format(floor($rc/50),0,",","");
$rci = $rc%50;

$nv = number_format(floor($rci/20),0,",","");
$rv = $rci%20;

$nd = number_format(floor($rv/10),0,",","");
$rd = $rv%10;

$ncin = number_format(floor($rd/5),0,",","");
$rcin = $rd%5;

$ndo = number_format(floor($rcin/2),0,",","");
$rdo = $rcin%2;

$nu = number_format(floor($rdo/1),0,",","");

echo $din."\n";
echo $nc." nota(s) de R$ 100,00\n";
echo $nci." nota(s) de R$ 50,00\n";
echo $nv." nota(s) de R$ 20,00\n";
echo $nd." nota(s) de R$ 10,00\n";
echo $ncin." nota(s) de R$ 5,00\n";
echo $ndo." nota(s) de R$ 2,00\n";
echo $nu." nota(s) de R$ 1,00\n";
?>