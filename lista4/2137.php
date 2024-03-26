<?php

function ordernar($codigos) {
    asort($codigos);
    return $codigos;
}

while ($n = intval(fgets(STDIN))) {
    $codigos = []; 
    for ($i = 0; $i < $n; $i++) {
        $codigo = trim(fgets(STDIN)); 
        $codigos[$codigo] = $codigo; 
    }

    $codigoOrd = ordernar($codigos);

    foreach ($codigoOrd as $codigo) {
        echo $codigo . "\n";
    }
}
?>