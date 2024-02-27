<?php
 
 $n = $_GET['nome'];
 $i = $_GET['idade'];
 $sl = $_GET['salario'];
 

 if($sl <= 1412.00)
    {
        $inss = $sl*0.075;

    }
 else if( $sl > 1412.00 && $sl< 2666.68)
    {
        $inss = $sl*0.09;
    }
 else if( $sl > 2666.68 && $sl< 4000.03)
    {
        $inss = $sl*0.12;
    }
 else if( $sl > 4000.03 )
    {
        $inss = $sl*0.14;

    }
    /////////////////////////////////////////////////////////////////////////////////////////
    $bir= $sl - $inss;
    ////////////////////////////////////////////////////////////////////////////////////////
    if($bir <= 2259.20 && $i< 65)
    {
        $irpf = $bir*0;

    }
 else if( $bir <= 2259.20 && $i >= 65)
    {
        $irpf = $sl*0 - 0;
    }

 else if($bir > 2259.20 && $bir <= 2828.65 && $i< 65)
    {
        $irpf = ($bir*0.075) - 169.44 ;

    }
 else if($bir > 2259.20 && $bir <= 2828.65 && $i>= 65)
    {
        $irpf = ($bir*0) ;

    }
 else if($bir > 2828.65 && $bir <= 3751.05 && $i< 65)
    {
        $irpf = ($bir*0.15) - 381.44 ;

    }
 else if($bir > 2828.65 && $bir <= 3751.05 && $i>= 65)
    {
        $irpf = ($bir*0) ;

    }
    else if($bir > 3751.05 && $bir <= 4664.68 && $i< 65)
    {
        $irpf = ($bir*0.225) - 381.44 ;

    }
 else if($bir > 3751.05 && $bir <= 4664.68 && $i>= 65)
    {
        $irpf = ($bir*0);

    }
    else if($bir > 4664.68  && $i< 65)
    {
        $irpf = ($bir*0.275)- 896.00 ;
    

    }
 else if($bir > 4664.68  && $i>= 65)
    {
        $irpf = ($bir*0);;

    }
   
 echo "Total a pagar INSS: ".number_format($inss,2,".","")." IRPF: ".number_format($irpf,2,".","");


 
?>