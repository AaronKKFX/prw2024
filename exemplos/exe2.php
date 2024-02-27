<?php
 
 $n = $_GET['nome'];
 $s1 = $_GET['senha'];
 $s2 = 123;
 $e = $_GET['email'];

 if($s1!= $s2)
 {
    echo "Senhas Não Coorespondem\n";
    return 0;
 }

 echo "Login Feito com sucesso";


 
?>