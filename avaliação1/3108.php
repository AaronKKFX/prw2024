<?php

$n = intval(readline());
$arr = array();
for($i=0;$i<$n;$i++)
{
    $arr = explode(" ",readline());
    $rev = array_reverse($arr);
    $p = str_replace("P","B",$rev);
    $p = str_replace("F","V",$p);
    $p = str_replace("T","D",$p);
    $p = str_replace("R","L",$p);
    $p = str_replace("J","Z",$p);
    $p = str_replace("x","S",$p);
    echo implode(" ",$p)."\n";
}
?>