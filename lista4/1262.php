<?php
while (true) {
    $s = readline();
    if ($s === false) break;
    
    $n = intval(readline());
    
    for ($i = $n; $i > 0; $i--) {
        $s = str_replace(str_repeat('R', $i), 'W', $s);
    }
    
    echo strlen($s) . "\n";
}
?>