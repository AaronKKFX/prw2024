<?php

$x = intval(readline());
$i=0;
while($i<=$x)
{
  $n= intval(readline());
  if($n>0)
  {
     if($n>=10 && $n<=20)
  {
    $in++;
    $i++;
  }
  else
  {
    $out++;
    $i++;
  } 
  }
  else{
      $i++;
  }
  
}
echo $in." in\n";
echo $out." out\n"
?>
