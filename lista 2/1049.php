<?php

    $p1 = readline();
    $p2 = readline();
    $p3 = readline();

    if ($p1 == "vertebrado"){
        if ($p2 == "ave"){
            if ($p3 == "carnivoro"){
                echo "aguia\n";
            }
            else{
                echo "pomba\n";
            }
        }
        else{
            if ($p3 == "onivoro"){
                echo "homem\n";
            }
            else{
                echo "vaca\n";
            }
        }
    }
    else{
        if ($p2 == "inseto"){
            if ($p3 == "hematofago"){
                echo "pulga\n";
            }
            else{
                echo "lagarta\n";
            }
        }
        else{
            if ($p3 == "hematofago"){
                echo "sanguessuga\n";
            }
            else{
                echo "minhoca\n";
            }
        }
    }

?>