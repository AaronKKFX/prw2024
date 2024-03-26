<?php
function variations_count($password) {
    $variations = 1;

    for ($i = 0; $i < strlen($password); $i++) {
        $char = strtolower($password[$i]);
        if (in_array($char, ['a', 'e', 'i', 'o', 's'])) {
            $variations *= 3;
        } else {
            $variations *= 2;
        }
    }
    return $variations;
}
$T = intval(readline());

for ($j = 0; $j < $T; $j++) {
    $password = readline();
    echo variations_count($password) . "\n";
}
?>