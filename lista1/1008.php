<?php
 $NUMERO = intval(readline());
 $HORAS = intval(readline());
 $VALOR = floatval(readline());
 
 $SALARY = $HORAS * $VALOR;
 
 echo "NUMBER = ".$NUMERO."\n";
 echo "SALARY = U$ ".number_format($SALARY,2,".","")."\n";
?>