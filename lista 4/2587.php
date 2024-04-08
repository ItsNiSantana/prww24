<?php

    $n = intval(readline());
    
    for ($i = 0; $i < $n; $i++) {
        $d1 = readline();
        $d2 = readline();
        $d1 = str_split($d1);
        $d2 = str_split($d2);
        $adivinhar = readline();
        $adivinhar = str_split($adivinhar);
        $caracteres = array_keys($adivinhar, "_");
        
        if ($d1[$caracteres[0]] == $d2[$caracteres[1]] || $d1[$caracteres[1]] == $d2[$caracteres[0]]){
          $resposta = "Y\n";
        }
        else{
          $resposta = "N\n";
        }
        echo $resposta;
    }

?>
