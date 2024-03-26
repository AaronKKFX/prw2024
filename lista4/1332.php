<?php

$n = 0;
$nbm = "";

fscanf(STDIN, "%d", $n);

while ($n > 0) {
    fscanf(STDIN, "%s", $nbm);
    
    if (strlen($nbm) == 5) {
        echo "3\n";
    } else if (($nbm[0] == 'o' && $nbm[1] == 'n') || ($nbm[0] == 'o' && $nbm[2] == 'e') || ($nbm[1] == 'n' && $nbm[2] == 'e')) {
        echo "1\n";
    } else if (($nbm[0] == 't' && $nbm[1] == 'w') || ($nbm[0] == 't' && $nbm[2] == 'o') || ($nbm[1] == 'w' && $nbm[2] == 'o')) {
        echo "2\n";
    }
    
    $n--;
}