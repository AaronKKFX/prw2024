<?php
$N = explode(" ",fgets(STDIN));

$n1 = $N[0];
$n2 = $N[1];
$n3 = $N[2];
$n4 = $N[3];

$media = (($n1*2.0)+($n2*3.0)+($n3*4.0)+($n4*1.0)) / 10.0;
$media *= 10;
$media = floor($media);
$media /= 10;

if($media > 7.0)
{
    echo "Media: ".number_format($media,1,".","")."\n";
    echo "Aluno aprovado.\n";
}
else if($media >= 5 && 7)
{
    $ne = number_format(fgets(STDIN), 1, ".", "");
    echo "Media: ".number_format($media,1,".","")."\n";
    echo "Aluno em exame.\n";
    
    if(($media + $ne)/2 >= 5)
    {
        echo "Nota do exame: ".$ne."\n";
        echo "Aluno aprovado.\n";
        echo "Media final: ".number_format(($media + $ne)/2,1,".","")."\n";
    }
    else if (($media + $ne)/2 < 5)
    {
        
        echo "Nota do exame: ".$ne."\n";
        echo "Aluno reprovado.\n";
        echo "Media final: ".number_format(($media + $ne)/2,1,".","")."\n";
    }
}
else if($media <5)
{
    echo "Media: ".number_format($media,1,".","")."\n";
    echo "Aluno reprovado.\n";
}
?>
