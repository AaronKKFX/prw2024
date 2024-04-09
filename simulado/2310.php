<?php

$n = intval(readline());
$ts = 0;
$tas = 0;
$tb = 0;
$tab = 0;
$ta = 0;
$taa = 0;
for($i=0;$i<$n;$i++)
{
    $nome = readline();
    list($s,$b,$a) = explode(" ",readline());
    list($as,$ab,$aa) = explode(" ",readline());
    
    $ts +=$s; $tas+=$as;
    $tb +=$b; $tab+=$ab;
    $ta +=$a; $taa+=$aa;
    
}
$ps = ($tas/$ts)*100;
$pb = ($tab/$tb)*100;
$pa = ($taa/$ta)*100;

echo "Pontos de Saque: ".number_format($ps,2,".","")." %.\n";
echo "Pontos de Bloqueio: ".number_format($pb,2,".","")." %.\n";
echo "Pontos de Ataque: ".number_format($pa,2,".","")." %.\n";
?>