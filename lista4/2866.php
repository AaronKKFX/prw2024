<?php

$C = intval(trim(fgets(STDIN)));

for ($i = 0; $i < $C; $i++) {
    $mensagem = trim(fgets(STDIN));
    $texto_oculto = preg_replace('/[^a-z]/', '', $mensagem);
    $texto_certo = strrev($texto_oculto);
    echo $texto_certo . "\n";
}

?>