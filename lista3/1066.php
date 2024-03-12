<?php
$c = 0;
while($i<5)
{
    $n = floatval(readline());
    if($n>0)
    {
       $po++;
    }
    if($n<0)
    {
        $ne++;
    }
    if($n%2 == 0)
    {
        $p ++;
    }
    if($n%2 != 0)
    {
        $im++;
    }
    $i++;
}
echo $p." valor(es) par(es)\n";
echo $im." valor(es) impar(es)\n";
echo $po." valor(es) positivo(s)\n";
echo $ne." valor(es) negativo(s)\n";
?>
