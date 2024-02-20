p

$A = floatval(readline());
$B = floatval(readline());
$C = floatval(readline());

$ATRI = number_format(($A * $C)/2.0 ,3,".","");
$ACIR = number_format(3.14159 * $C * $C,3,".","");
$ATRA = number_format((($A + $B) * $C)/2.0,3,".","");
$AQUA = number_format($B * $B,3,".","");
$ARET = number_format(($A * $B),3,".","");

echo "TRIANGULO: ".$ATRI."\n";
echo "CIRCULO: ".$ACIR."\n";
echo "TRAPEZIO: ".$ATRA."\n";
echo "QUADRADO: ".$AQUA."\n";
echo "RETANGULO: ".$ARET."\n";

?>
