<?php
    $entrada = explode(" ", fgets(STDIN));
    $hi = $entrada[0];
    $mi = $entrada[1];
    $ht = $entrada[2];
    $mt = $entrada[3];
    $mi += $hi * 60;
    $mt += $ht * 60;
    $t = $mt - $mi;

    if($t<=0){
        $t += 24*60;
    }
    $h = number_format(floor($t/60), 0, "", "");
    $m = $t % 60;
    echo"O JOGO DUROU ".$h." HORA(S) E ".$m." MINUTO(S)\n";
?>