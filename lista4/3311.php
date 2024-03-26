<?php

function ordenar($fichas) {
    $pLetra = [];
    $orde = [];
    foreach ($fichas as $ficha) {
        $letra = substr($ficha, 0, 1);
        $pLetra[$letra][] = $ficha;
    }
    ksort($pLetra);
    foreach ($pLetra as $letra => $nomes) {
        foreach ($nomes as $nome) {
            $orde[] = $nome;
        }
    }
    return $orde;
}

$entrada = explode(" ", readline());
$N = intval($entrada[0]);

$fichas = [];
for ($i = 0; $i < $N; $i++) {
    $ficha = readline();
    $fichas[] = $ficha;
}

$fOrd = ordenar($fichas);
foreach ($fOrd as $nome) {
    echo $nome . "\n";
}
?>