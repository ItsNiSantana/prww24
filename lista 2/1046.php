<?php
    list($inicio, $fim) = explode(" ", readline());
    if($inicio < $fim):
        $duracao = $fim - $inicio;
        echo "O JOGO DUROU ", $duracao, " HORA(S)\n";
    else:
        $duracao = (24 - $inicio) + $fim;
        echo "O JOGO DUROU ", $duracao, " HORA(S)\n";
    
    endif;
?>