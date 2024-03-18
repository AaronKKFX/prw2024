<?php

$gg = 0;
$ig = 0;
$ep = 0;
$gr = 0;

do {
    list($i, $g) = explode(" ", readline());
    
    if ($i > $g) {
        $ig++;
    } elseif ($g > $i) {
        $gg++;
    } else {
        $ep++;
    }
    
    $gr++;
    do {
        echo "Novo grenal (1-sim 2-nao)\n";
        $op = intval(readline());
    } while ($op != 1 && $op != 2);
} while ($op == 1);

echo "$gr grenais\n";
echo "Inter:" . $ig . "\n";
echo "Gremio:" . $gg . "\n";
echo "Empates:" . $ep . "\n";

if ($ig > $gg) {
    echo "Inter venceu mais\n";
} else if ($ig < $gg) {
    echo "Gremio venceu mais\n";
} else {
    echo "Nao houve vencedor\n";
}
?>