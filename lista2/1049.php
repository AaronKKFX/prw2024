<?php

$p1 = readline();
$p2 = readline();
$p3 = readline();

switch($p1){
    case "vertebrado":
        switch($p2){

            case "ave":

                switch($p3){

                    case "carnivoro":
                        echo "aguia\n";
                        break;

                    case "onivoro":
                        echo"pomba\n";
                        break;
                }
                break;

            case "mamifero":

                switch($p3){

                    case "onivoro":
                        echo"homem\n";
                        break;

                    case "herbivoro":
                        echo"vaca\n";
                        break;
                }
                break;
        }
    case "invertebrado":

        switch($p2){

            case "inseto":
                switch($p3){

                    case "hematofago":
                        echo"pulga\n";
                        break;

                    case "herbivoro":
                        echo"lagarta\n";
                        break;
                }
                break;

            case "anelideo":
                switch($p3){

                    case "hematofago":
                        echo"sanguessuga\n";
                        break;

                    case "onivoro":
                        echo"minhoca\n";
                        break;
                }
                break;
        }
    }
?>