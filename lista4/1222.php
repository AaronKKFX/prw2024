<?php
while (fscanf(STDIN, "%d%d%d", $N, $L, $C) !== false) {
    $story = fgets(STDIN);
    $len = strlen($story) - 1;

    $chars = $checkpoint = 0;
    $lines = $pages = 1;

    for ($i = 0; $i < $len; ++$i) {
        if ($i && $story[$i-1] == ' ') {
            $checkpoint = $i;
        }

        if ($chars == $C) {
            ++$lines;
            if ($story[$i] == ' ') {
                $chars = 0;
            } else {
                $chars = $i - $checkpoint + 1;
            }
        } else {
            ++$chars;
        }
    }

    $pages = ceil($lines / $L);
    printf("%d\n", $pages);
}
?>