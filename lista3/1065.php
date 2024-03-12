<?php
$c = 0;
while($i<5)
{
    $n = floatval(readline());
    if($n%2 == 0)
    {
        $c ++;
        $i ++;
    }
    else
    {
        $i++;
    }
}
echo $c." valores pares\n";
?>
