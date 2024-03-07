<?php
$N = explode(" ",fgets(STDIN));

sort($N);

$a=$N[2];
$b=$N[1];
$c=$N[0];

if($a >= $b+$c)
{
    echo "NAO FORMA TRIANGULO\n";
}
else{
    
    if(pow($a,2) == pow($b,2) + pow($c,2))
    {
        echo " TRIANGULO RETANGULO\n";
    }
    if(pow($a,2) > pow($b,2) + pow($c,2))
    {
        echo "TRIANGULO OBTUSANGULO\n";
    }
    if(pow($a,2) < pow($b,2) + pow($c,2))
    {
        echo "TRIANGULO ACUTANGULO\n";
    }
    if ($a == $b && $b == $c)
    {
    echo "TRIANGULO EQUILATERO\n";
    }
    if(($c == $b && $b != $a )|| ($c == $a && $a != $b) || ($b == $c && $b !=$a))
    {
        echo "TRIANGULO ISOSCELES\n";
    }
}

?>