
<?php

$R = floatval(readline());

$VOLUME = (4.0/3.0) * 3.14159 * (pow($R,3));

echo "VOLUME = ".number_format($VOLUME,3,".","")."\n";
?>
