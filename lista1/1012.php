<?php

$v = explode(" ",fgets(STDIN));// explode usado para pegar informações em somente um linha variavel $v[0] será pega e após o espaço indicado pelas aspas outro valor//
                               // será introduzido na variavel $v[1] e por ai em diante
$ATR = number_format(($v[0] * $v[2]) /2, 3,".","");
$ARC = number_format( 3.14159 * ($v[2] * $v[2]), 3,".","");
$ATRA = number_format((($v[0] + $v[1])*$v[2]) /2, 3,".","");
$AQU = number_format(($v[1] * $v[1]), 3,".","");
$ARE = number_format(($v[0] * $v[1]), 3,".","");

echo "TRIANGULO: ".$ATR."\n";
echo "CIRCULO: ".$ARC."\n";
echo "TRAPEZIO: ".$ATRA."\n";
echo "QUADRADO: ".$AQU."\n";
echo "RETANGULO: ".$ARE."\n";

?>
