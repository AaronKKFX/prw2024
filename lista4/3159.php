<?php
$N = intval(readline());
$letras = ["a" => "2", "b" => "22", "c" => "222", "d" => "3", "e" => "33", "f" => "333", "g" => "4", "h" => "44", "i" => "444", "j" => "5", "k" => "55", "l" => "555", "m" => "6", "n" => "66", "o" => "666", "p" => "7", "q" => "77", "r" => "777", "s" => "7777", "t" => "8", "u" => "88", "v" => "888", "w" => "9", "x" => "99", "y" => "999", "z" => "9999", " " => "0"];
for ($i = 0; $i < $N; $i++) {
    $r = "";
    $p = str_split(readline());
    for ($c = 0; $c < count($p); $c++) {
        if ($c != 0)
            if (substr($letras[strtolower($p[$c])], 0, 1) == substr($letras[strtolower($p[$c - 1])], 0, 1) && !ctype_upper($p[$c]))
                $r .= "*";
        if (ctype_upper($p[$c]))
            $r .= "#" . $letras[strtolower($p[$c])];
        else
            $r .= $letras[$p[$c]];
    }
    echo "$r\n";
}