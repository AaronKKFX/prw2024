<?php
    $a = explode(" ", readline());
    $a[0] = (float) $a[0];
    $a[1] = (float) $a[1];
    $a[2] = (float) $a[2];
    rsort($a);
    $A = $a[0];
    $B = $a[1];
    $C = $a[2];
    if ($A >= ($B + $C)){
        echo "NAO FORMA TRIANGULO\n";
    }
    else{
        if (($A*$A) == (($B*$B) + ($C*$C))){
            echo "TRIANGULO RETANGULO\n";
        }
        elseif (($A*$A) > (($B*$B) + ($C*$C))){
            echo "TRIANGULO OBTUSANGULO\n";
        }
        elseif (($A*$A) < (($B*$B) + ($C*$C))){
            echo "TRIANGULO ACUTANGULO\n";
        }

        if (($A == $B) && ($A == $C)){
            echo "TRIANGULO EQUILATERO\n";
        }
        elseif ((($A == $B) && ($A != $C)) || (($A == $C) && ($A != $B)) || (($B == $C) && ($B != $A))){
            echo "TRIANGULO ISOSCELES\n";
        }
    }

?>