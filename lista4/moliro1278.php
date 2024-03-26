<?php

    while($n = intval(readline()) and $n>0)
    {
        if($x >1 )
        echo"\n";
        $linhas = [];
        for($i = 0; $i< $n; $i++)
        {
            $linhas [] = readline();
        }
        // remover espaços (substr_count, str_replace, trim)
        $achou = true;
        while($achou)
        {
            $achou = false;
            for($i=0; $i<$n; $i++)
            {
                if(substr_count($linhas[$i],"  ") > 0 )
                {
                    $linhas[$i] = str_replace("  ", " ", $linhas[$i]);
                    $achou = true;
                }
            }
        }
        $maior = 0;
        // Remove espaços no começo/fim, encontra maior string
        for($i = 0 ;$i<$n; $i++)
        {
            $linhas[$i] = trim($linhas[$i]);
            $tamanho = strlen($linhas[$i]);
            if($tamanho> $maior)
            {
                $maior = $tamanho;
            }
        }
        //adicionar espaços (strlen, str_pad)
        for($i = 0 ;$i<$n; $i++)
        {
            $linhas[$i] = str_pad($linhas[$i], $maior," ", STR_PAD_LEFT);
        }
        // Impressão
        for($i=0;$i<$n;$i++)
        {
            echo$linhas[$i]."\n";
        }
        $x++;

    }
?>