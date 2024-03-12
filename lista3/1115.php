<?php

$i=1;

while($i == 1)
{
    list($x,$y) = explode(" ",readline());
    
    if($x == 0 || $y == 0)
    {
        $i++;
    }
    else if($x>0 && $y>0)
    {
        echo"primeiro\n";
    }
    else if($x<0 && $y>0)
    {
        echo"segundo\n";
    }
    else if($x<0 && $y<0)
    {
        echo"terceiro\n";
    }
    else if($x>0 && $y<0)
    {
        echo"quarto\n";
    }
}

?>
