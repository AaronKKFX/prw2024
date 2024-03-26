<?php
$entradas = intval(readline());
$tamanho = 0;
for ($i = 0; $i < $entradas; $i++) {
    $senha = readline();
    $senha = str_split($senha);
    if ($i == 0) {
        $tamanho = count($senha);
    }
    if ($senha[0] == 'R' && $senha[1] == 'A' && count($senha) == $tamanho) {
        unset($senha[0]);
        unset($senha[1]);
        $senha_prov = implode("", $senha);
        echo intval($senha_prov) . "\n";
    } else {
        echo 'INVALID DATA' . "\n";
    }
}
?>
