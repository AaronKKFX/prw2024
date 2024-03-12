<?php

$x = intval(readline());

for($i=0;$i<=$x;$i++)
{
    $n = intval(readline());
    
    if($n ==0)
    {
        echo"NULL\n";
    }
    else if($n%2 == 0)
    {
        if($n>0)
        {
            echo"EVEN POSITIVE\n";
        }
        else
        {
            echo"EVEN NEGATIVE\n";
        }
    }
    else
    {
         if($n>0)
        {
            echo"ODD POSITIVE\n";
        }
        else
        {
            echo"ODD NEGATIVE\n";
        }
    }
}
?>
