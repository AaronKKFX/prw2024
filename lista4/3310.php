<?php
$n = intval(readline());
$entraTeto = explode(" ", readline());
$entraChao = explode(" ", readline());
$mudancas = ['-1' => $entraChao, '1' => $entraTeto];
$mudaTeto = 0;
$mudaChao = 0;
$local = 1;
for ($i = 0; $i < $n; $i++) {
    if ($mudancas[$local][$i] == 0) {
        $mudaTeto++;
        $local *= -1;
    } elseif ($i != 0) {
        if ($mudancas[$local][$i] > $mudancas[$local][$i - 1]) {
            $mudaTeto++;
            $local *= -1;
        }
    }
}
$local = -1;
for ($i = 0; $i < $n; $i++) {
    if ($mudancas[$local][$i] == 0) {
        $mudaChao++;
        $local *= -1;
    } elseif ($i != 0) {
        if ($mudancas[$local][$i] > $mudancas[$local][$i - 1]) {
            $mudaChao++;
            $local *= -1;
        }
    }
}
if ($mudaChao > $mudaTeto)
    echo "$mudaTeto\n";
else
    echo "$mudaChao\n";