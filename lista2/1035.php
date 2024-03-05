<?php

$N = explode(" ",fgets(STDIN));

if ($N[1]>$N[2] && $N[3]>$N[0] && $N[2]+$N[3] > $N[0]+$N[1] && $N[2]>=0 && $N[3]>=0 && $N[0]%2 == 0) {
    
    echo "Valores aceitos\n";
}
else{
    echo "Valores nao aceitos\n";
}
?>