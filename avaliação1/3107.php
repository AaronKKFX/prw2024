<?php

$v = doubleval(readline());
$d = doubleval(readline());
$c = doubleval(readline());

$t = $d/$v;
$tc= $d/$c;

echo "Total horas: ".number_format($t,2,".","")."\n";
echo "Total combustivel: ".number_format($tc,2,".","")."\n";

?>