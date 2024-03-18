<?php
$n1 = intval(readline());
$n2 = intval(readline());
$soma = 0;
for($i = $n2+1; $i < $n1; $i++)
{
    if($i%2 != 0)
    {
        $soma += $i;
    }
    else 
    {
        
    }
    
}
 echo "$soma\n";
?>