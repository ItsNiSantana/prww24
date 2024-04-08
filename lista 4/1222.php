<?php

    while(fscanf(STDIN, "%d%d%d", $n, $l, $c) !== false) {
        $conto = fgets(STDIN);
        $tamConto = strlen($conto) - 1;
        $caracteres = $salvamento = 0;
        $linhas = $pg = 1;
        for ($i = 0; $i < $tamConto; ++$i) {
            if($i and $conto[$i - 1] == ' ')
                $salvamento = $i;
            if($caracteres == $c) {
                ++$linhas;
                if($conto[$i] == ' ')
                    $caracteres = 0;
                else
                    $caracteres = $i - $salvamento + 1;
            }else
                ++$caracteres;
        }
        $pg = ceil($linhas / $l);
        printf("%d\n", $pg);
    }
    
?>
