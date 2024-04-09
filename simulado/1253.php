<?php

$n = intval(readline());
$alf = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'];

while ($n--) {
    $resposta = "";
    $palavra = readline();
    $num = intval(readline());
    $palavra = str_split($palavra);

    foreach ($palavra as $p) {
        $l = array_search($p, $alf);
        $l -= $num;
        if ($l < 0) {
            $l = 26 + $l;
        }
        $resposta .= $alf[$l];
    }
    echo $resposta . "\n";
}

?>