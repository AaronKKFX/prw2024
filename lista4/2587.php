<?php

function adc($x, $p) {
    for ($i = 0; $i < strlen($p); $i++) {
        if ($p[$i] == '_') continue;
        if ($x[$i] != $p[$i]) return false;
    }
    return true;
}

$iterations = intval(trim(fgets(STDIN)));

for ($g = 0; $g < $iterations; $g++) {
    $a = trim(fgets(STDIN));
    $b = trim(fgets(STDIN));
    $p = trim(fgets(STDIN));
    
    $a1 = $a[strpos($p, '_')];
    $a2 = $a[strrpos($p, '_')];
    $b1 = $b[strpos($p, '_')];
    $b2 = $b[strrpos($p, '_')];
    
    if (adc($a, $p) && adc($b, $p)) {
        echo ($a == $b || ($a2 == $b1 || $a1 == $b2)) ? "Y\n" : "N\n";
    } else {
        echo "Y\n";
    }
}

?>
