<?php
    list($inicioh, $iniciom, $fimh, $fimm) = explode(" ", readline());

     if($inicioh == $fimh){
        if ($iniciom == $fimm){
            $duracaom = $fimm - $iniciom;
            $duracaoh = (24 - $inicioh) + $fimh;
        }
        elseif ($iniciom < $fimm){
            $duracaom = $fimm - $iniciom;
            $duracaoh = $fimh - $inicioh;
        }
        else{
            $duracaom = (60 - $iniciom) + $fimm;
            $duracaoh = (24 - $inicioh) + $fimh - 1;
        }
    }
    elseif($inicioh < $fimh){
        if ($iniciom == $fimm){
            $duracaom = $fimm - $iniciom;
            $duracaoh = $fimh - $inicioh;
        }
        elseif ($iniciom < $fimm){
            $duracaom = $fimm - $iniciom;
            $duracaoh = $fimh - $inicioh;
        }
        else{
            $duracaom = (60 - $iniciom) + $fimm;
            $duracaoh = $fimh - $inicioh - 1;
        }
    }
    else{
        if ($iniciom == $fimm){
            $duracaom = $fimm - $iniciom;
            $duracaoh = (24 - $inicioh) + $fimh;
        }
        elseif ($iniciom < $fimm){
            $duracaom = $fimm - $iniciom;
            $duracaoh = (24 - $inicioh) + $fimh - 1;
        }
        else{
            $duracaom = (60 - $iniciom) + $fimm;
            $duracaoh = (24 - $inicioh) + $fimh - 1;
        }
    }

    echo "O JOGO DUROU ", $duracaoh, " HORA(S) E ", $duracaom, " MINUTO(S)\n";
?>