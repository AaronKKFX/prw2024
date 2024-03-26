<?php
function minOp($string1, $string2) {
    $count = 0;
    for ($i = 0; $i < strlen($string1); $i++) {
        $dif = ord($string2[$i]) - ord($string1[$i]);
        if ($dif < 0) {
            $dif += 26;
        }
        $count += $dif;
    }
    return $count;
}

$t = intval(readline());

for ($i = 0; $i < $t; $i++) {
    $strings = explode(" ", readline());
    $A = $strings[0];
    $B = $strings[1];
    $resultado = minOp($A, $B);
    echo $resultado . "\n";
}
?>