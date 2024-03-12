<?php

    $n = explode(" ", readline());
    $n[0] = (float) $n[0];
    $n[1] = (float) $n[1];
    $n[2] = (float) $n[2];
    rsort($n);
    $A = $n[0];
    $B = $n[1];
    $C = $n[2];
    if ($A >= ($B + $C)){
        echo "NAO FORMA TRIANGULO\n";
    }
    else{
        if (pow($A, 2) == (pow($B, 2) + pow($C, 2))){
            echo "TRIANGULO RETANGULO\n";
        }
        elseif (pow($A, 2) > (pow($B, 2) + pow($C, 2))){
            echo "TRIANGULO OBTUSANGULO\n";
        }
        elseif (pow($A, 2) < (pow($B, 2) + pow($C, 2))){
            echo "TRIANGULO ACUTANGULO\n";
        }

        if (($A == $B) && ($A == $C)){
            echo "TRIANGULO EQUILATERO\n";
        }
        elseif ((($A == $B) && ($A != $C)) || (($A == $C) && ($A != $B)) || (($B == $C) && ($B != $A))){
            echo "TRIANGULO ISOSCELES\n";
        }
    }