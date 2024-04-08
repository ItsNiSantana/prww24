<?php

    function engracada($sequencia) {
        $v = ['a', 'e', 'i', 'o', 'u'];
        $sequenciav = preg_replace('/[^'.implode('', $v),']/', '', $sequencia);
    
        return $sequenciav === strrev($sequenciav);
    }

    $entrada = trim(fgets(STDIN));

    if(engracada($entrada)) {
        echo "S\n";
    } else {
        echo "N\n";
    }

?>
