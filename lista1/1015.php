<?php
      //list pode ser usada com isso tbm//
$p1 = explode(" ",fgets(STDIN));//explode usado para pegar a linha aspas indicando a quebra da variavel para a proxima// 
$p2 = explode(" ",fgets(STDIN));//fgets(STDIN) indicando que o conjunto de caracteres após as aspas será utilizado como variavel//

$x1 = floatval($p1[0]);//$p1[0] = primeira variavel do conjunto p1 transformada em float para sequencia do cod//
$y1 = floatval($p1[1]);
$x2 = floatval($p2[0]);
$y2 = floatval($p2[1]);

$DIS = number_format(sqrt(pow($x2-$x1,2)+ pow($y2-$y1,2)),4,".","");

echo $DIS."\n"
?>