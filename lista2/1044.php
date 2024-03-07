<?php

list($a, $b) = explode(' ',fgets(STDIN));

if($b%$a == 0 || $a%$b == 0)
{
    echo "Sao Multiplos\n";
}
else {
    
    echo "Nao sao Multiplos\n";
}
?>