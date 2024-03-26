<?php
$e = explode(" ", readline());
foreach ($e as $c => $i) {
    if (strlen($i) > 3 && $i[0] == $i[2] && $i[1] == $i[3]) {
        echo substr($i, 2);
    } else {
        echo $i;
    }
    if ($c != count($e) - 1) {
        echo " ";
    }
}
echo "\n";
?>