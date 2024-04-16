<?php

do{
    $c = intval(readline());
    
    list($n,$m) = explode(" ",readline());
    
    for($i=0; $i<$c ;$i++)
    {
    list($x,$y) = explode(" ",readline());

    if($x == $n  or $y == $m)
    {
        echo"divisa\n";
    }
    elseif($x > $n && $y > $m)
    {
        echo"NE\n";
    }
    elseif($x>$n && $y<$m)
    {
        echo"SE\n";
    }
    elseif($x<$n && $y>$m)
    {
        echo"NO\n";
    }
    elseif($x<$n && $y<$m)
    {
        echo"SO\n";
    }
    }
}while($c!=0);

?>