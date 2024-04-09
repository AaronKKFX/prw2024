<?php

$n = intval(fgets(STDIN));
$linha = [];
$p = "Ho";
for($i=0; $i< $n;$i++)
{
    if($i == $n-1)
    {
        $linha[$i] = "Ho!";
    }
    else
    {
        $linha[$i] = "Ho ";
    }
    
}
 echo (implode("", $linha))."\n";
?>