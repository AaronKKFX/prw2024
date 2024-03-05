<?php

$N = explode(" ",fgets(STDIN));

$a = $N[0];
$b = $N[1];
$c = $N[2];

$delta = pow($b,2) -4*$a*$c;

$x1 = number_format((-$b + sqrt($delta))/(2*$a),5,".","");
$x2 = number_format((-$b - sqrt($delta))/(2*$a),5,".","");

if ($a != 0 && $delta >0) {
    echo "R1 = ".$x1."\n";
    echo "R2 = ".$x2."\n";
}
else{
    echo "Impossivel calcular\n";
}
?>
