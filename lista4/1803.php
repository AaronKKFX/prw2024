<?php
$m = [];
for ($i = 0; $i < 4; $i++) {
    $m[] = readline();
}

$v = [];
for ($i = 0; $i < strlen($m[0]); $i++) {
    $f = intval($m[0][$i]) * 1000;
    $f += intval($m[1][$i]) * 100;
    $f += intval($m[2][$i]) * 10;
    $f += intval($m[3][$i]);
    $v[] = $f;
}

for ($i = 1; $i < count($v) - 1; $i++) {
    echo chr(($v[0] * $v[$i] + $v[count($v) - 1]) % 257);
}
echo "\n";
?>