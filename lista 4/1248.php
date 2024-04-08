<?php

    function insertionSort(&$array, $tamanho)
    {
        for ($i = 1; $i < $tamanho; ++$i) {
            $tmp = $array[$i];
            $j = $i - 1;
            while ($j >= 0 && $tmp < $array[$j]) {
                $array[$j + 1] = $array[$j];
                --$j;
            }
            $array[$j + 1] = $tmp;
        }
    }
    $n = intval(fgets(STDIN));
    for ($i = 0; $i < $n; ++$i) {
        $precisaComer = array_fill(0, 26, 1);
        $naoEstaDieta = array_fill(0, 26, 0);
        $dieta = rtrim(fgets(STDIN), "\n");
        $dietatam = strlen($dieta);
        $jaComeu = rtrim(fgets(STDIN), "\n");
        $jaComeutam = strlen($jaComeu);
        $jaComeu .= rtrim(fgets(STDIN), "\n");
        $jaComeutam = strlen($jaComeu);
        for ($j = 0; $j < $dietatam; ++$j) {
            $naoEstaDieta[ord($dieta[$j]) - ord('A')] = 1;
        }
        $cheater = 0;
        for ($j = 0; $j < $jaComeutam && !$cheater; ++$j) {
            $k = ord($jaComeu[$j]) - ord('A');

            if (!($naoEstaDieta[$k] && $precisaComer[$k])) {
                $cheater = 1;
            } else {
                $precisaComer[$k] = 0;
            }
        }
        if ($cheater) {
            echo "CHEATER\n";
        } else {
            insertionSort($dieta, $dietatam);
            $jantar = "";
            for ($j = 0; $j < $dietatam; ++$j) {
                if ($precisaComer[ord($dieta[$j]) - ord('A')]) {
                    $jantar .= $dieta[$j];
                }
            }

            echo $jantar, "\n";
        }
    }
    
?>
