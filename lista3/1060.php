<?php
$c = 0;
while($i<6)
{
    $n = floatval(readline());
    if($n>0)
    {
        $c ++;
        $i ++;
    }
    else
    {
        $i++;
    }
}
echo $c." valores positivos\n";

?>
