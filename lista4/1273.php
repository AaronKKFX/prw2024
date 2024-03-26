<?php
$linhas = array_fill(0, 50, array_fill(0, 51, ""));
$N;
$n;
$maior;
$first = 1;

while(fscanf(STDIN, "%d\n", $N)){
    if(!$N)  break;

    if($first)   $first = 0;
    else echo "\n";

    $maior = 0;
    for($i = 0; $i < $N; ++$i){
        fscanf(STDIN, "%s\n", $linhas[$i]);
        $maior = $maior < strlen($linhas[$i]) ? strlen($linhas[$i]) : $maior;
    }

    for($i = 0; $i < $N; ++$i){
        $n = strlen($linhas[$i]);
        for($j = 0; $j < $maior - $n; ++$j)  echo " ";
        echo $linhas[$i] . "\n";
    }
}

return 0;
?>
