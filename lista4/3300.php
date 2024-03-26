<?php
function verifica($num) {
    $num_str = strval($num);
    for ($i = 0; $i < strlen($num_str) - 1; $i++) {
        if ($num_str[$i] == '1' && $num_str[$i + 1] == '3') {
            return true;
        }
    }
    return false;
}
$N = strval(readline());

if (verifica($N)) {
    echo "$N es de Mala Suerte\n";
} else {
    echo "$N NO es de Mala Suerte\n";
}
?>