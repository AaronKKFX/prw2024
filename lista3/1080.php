<?php
$nm= 0;
for ($i = 1; $i<=100; $i++)
{
    $n = intval(readline());
    
    if($n > $nm)
    {
        $nm = $n;
        $pn = $i;
    }
}

echo"$nm\n$pn\n";
?>
