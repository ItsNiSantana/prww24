<?php

    $n = intval(readline());
    
    while($n--) {
        $e = "";
        list($a, $b) = explode(" ", readline());
        while ($b >= $a)
            $e .= $a++;
        $e .= strrev($e);
        echo "$e\n";
    }
    
?>
