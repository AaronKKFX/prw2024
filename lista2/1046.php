
<?php

$h = explode(" ", fgets(STDIN));

$hi = $h[0];
$hf = $h[1];

$t = $hf - $hi;

if($t <=0)
{
    $t += 24;
}
 echo "O JOGO DUROU ".$t." HORA(S)\n"
?>
