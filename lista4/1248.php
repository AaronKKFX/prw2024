<?php

function insertionSort(&$array, $length) {
    for ($i = 1; $i < $length; ++$i) {
        $tmp = $array[$i];
        $j = $i - 1;
        while ($j >= 0 && $tmp < $array[$j]) {
            $array[$j + 1] = $array[$j];
            --$j;
        }
        $array[$j + 1] = $tmp;
    }
}

$N = intval(fgets(STDIN));
for ($i = 0; $i < $N; ++$i) {
    $shouldEat = array_fill(0, 26, 1);
    $isInDiet = array_fill(0, 26, 0);

    $diet = rtrim(fgets(STDIN), "\n");
    $dietLength = strlen($diet);

    $alreadyEaten = rtrim(fgets(STDIN), "\n");
    $alreadyEatenLength = strlen($alreadyEaten);

    $alreadyEaten .= rtrim(fgets(STDIN), "\n");
    $alreadyEatenLength = strlen($alreadyEaten);

    for ($j = 0; $j < $dietLength; ++$j) {
        $isInDiet[ord($diet[$j]) - ord('A')] = 1;
    }

    $cheater = 0;
    for ($j = 0; $j < $alreadyEatenLength && !$cheater; ++$j) {
        $k = ord($alreadyEaten[$j]) - ord('A');

        if (!($isInDiet[$k] && $shouldEat[$k])) {
            $cheater = 1;
        } else {
            $shouldEat[$k] = 0;
        }
    }

    if ($cheater) {
        echo "CHEATER\n";
    } else {
        insertionSort($diet, $dietLength);

        $dinner = "";
        for ($j = 0; $j < $dietLength; ++$j) {
            if ($shouldEat[ord($diet[$j]) - ord('A')]) {
                $dinner .= $diet[$j];
            }
        }

        echo $dinner . "\n";
    }
}

?>
