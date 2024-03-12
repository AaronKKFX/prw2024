<?php
$n = explode(" ", fgets(STDIN));

rsort($n);

if ($n[0] >= $n[1] + $n[2]) {
    
    echo "NAO FORMA TRIANGULO\n";
    
} else {

    if ($n[0] * $n[0] == $n[1] * $n[1] + $n[2] * $n[2]) {
        echo "TRIANGULO RETANGULO\n";
    } 
    if ($n[0] * $n[0] > $n[1] * $n[1] + $n[2] * $n[2]) {
        echo "TRIANGULO OBTUSANGULO\n";
    } 
    if ($n[0] * $n[0] < $n[1] * $n[1] + $n[2] * $n[2]) {
        echo "TRIANGULO ACUTANGULO\n";
    }
    if ($n[0] == $n[1] && $n[1] == $n[2]) {
        echo "TRIANGULO EQUILATERO\n";
    }
    if ($n[0] == $n[1] || $n[1] == $n[2] || $n[0] == $n[2]) {
        echo "TRIANGULO ISOSCELES\n";
    }
}
?>