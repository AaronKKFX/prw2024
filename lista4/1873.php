<?php
$c = intval(readline());
$arr = array("pedra","papel","tesoura","lagarto","spock");
for($i=0; $i<$c ;$i++)
{
    list($r,$s) = explode(" ",readline());
    
    if($r == $s)
    {
        echo"empate\n";
    }
    
    else if ($r == $arr[0])
    {
        if($s == $arr[2] || $s ==$arr[3])
        {
            echo"rajesh\n";
        }
        else
        {
            echo"sheldon\n";
        }
    }
    else if($r == $arr[1])
    {
        if($s == $arr[4] || $s==$arr[0])
        {
            echo"rajesh\n";
        }
        else
        {
            echo"sheldon\n";
        }
    }
    else if($r == $arr[2])
    {
        if($s == $arr[3] || $s== $arr[1])
        {
            echo"rajesh\n";
        }
        else
        {
            echo"sheldon\n";
        }
    }
    else if($r == $arr[3])
    {
        if($s == $arr[4] || $s == $arr[1])
        {
            echo"rajesh\n";
        }
        else
        {
            echo"sheldon\n";
        }
    }
    else if($s == $arr[2] || $s==$arr[0])
    {
        echo "rajesh\n";
    }
    else
    {
        echo "sheldon\n";
    }
}
?>