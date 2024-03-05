<?php

$n = floatval(readline());

if( $n>0 && $n<=25) 
{
    echo "Intervalo [0,25]\n";
}
else if( $n>25 && $n<=50)
{
    echo "Intervalo (25,50]\n";
}
else if( $n>50 && $n<=75)
{
    echo "Intervalo (50,75]\n"; 
}
else if( $n>75 && $n<=100)
{
    echo "Intervalo (75,100]\n";
}
else
{
 echo"Fora de intervalo\n";
}
?>
