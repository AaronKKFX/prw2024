<?php
$din = floatval(readline());

$nc = number_format(floor($din/100),0,".","");
$rc = $din%100;

$nci = number_format(floor($rc/50),0,".","");
$rci = $rc%50;

$nv = number_format(floor($rci/20),0,".","");
$rv = $rci%20;

$nd = number_format(floor($rv/10),0,".","");
$rd = $rv%10;

$ncin = number_format(floor($rd/5),0,".","");
$rcin = $rd%5;

$ndo = number_format(floor($rcin/2),0,".","");
$rdo = $rcin%2;

$mu = number_format(floor($rdo/1),0,".","");
$rmu = ($din*100)%100;

$mci = number_format(floor($rmu/50),0,".","");
$rmci = $rmu%50;

$mv = number_format(floor($rmci/25),0,".","");
$rmv = $rmci%25;

$md = number_format(floor($rmv/10),0,".","");
$rmd = $rmv%10;

$mcin = number_format(floor($rmd/5),0,".","");
$rmcin = $rmd%5;

$muc = number_format(floor($rmcin/1),0,".","");


echo "NOTAS:\n";
echo $nc." nota(s) de R$ 100.00\n";
echo $nci." nota(s) de R$ 50.00\n";
echo $nv." nota(s) de R$ 20.00\n";
echo $nd." nota(s) de R$ 10.00\n";
echo $ncin." nota(s) de R$ 5.00\n";
echo $ndo." nota(s) de R$ 2.00\n";
echo "MOEDAS:\n";
echo $mu." moeda(s) de R$ 1.00\n";
echo $mci." moeda(s) de R$ 0.50\n";
echo $mv." moeda(s) de R$ 0.25\n";
echo $md." moeda(s) de R$ 0.10\n";
echo $mcin." moeda(s) de R$ 0.05\n";
echo $muc." moeda(s) de R$ 0.01\n";

?>