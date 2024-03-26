<?php
$string = readline();
if (preg_match('/^[a-z]+$/', $string)) {
    $nova_string = preg_replace("/[bcdfghjklmnpqrstvwxyz]/", "", $string);
    $invertida = strrev($nova_string);
    if($nova_string == $invertida){
        echo 'S'. PHP_EOL;;
    }
    else{
      echo 'N' . PHP_EOL;
    }
  }
?>