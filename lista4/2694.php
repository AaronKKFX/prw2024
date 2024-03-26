<?php

$N = intval(fgets(STDIN));

for ($i = 0; $i < $N; $i++) {
    $line = trim(fgets(STDIN));
    $total = 0;
    $num1 = intval(substr($line, 2, 2)); 
    $num2 = intval(substr($line, 5, 3));  
    $num3 = intval(substr($line, 11, 2));  
    $total = $num1 + $num2 + $num3;
    echo $total . "\n";
}
?>