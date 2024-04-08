<?php

    $n = intval(readline());
    for($i = 0; $i < $n; $i++) {
        $entrada = str_split(readline());
        $nu1 = intval(implode(array_slice($entrada, 2, 3)));
        $nu2 = intval(implode(array_slice($entrada, 5, 3)));
        if(is_int(intval($entrada[11]))){
            $nu3 = array_slice($entrada, 11, 3);
        }
        else{
            $nu3 = array_slice($entrada, 12, 2);
        }
        if (intval($nu3[0]) == NAN){
            array_shift($nu3);
        }
        $nu3 = intval(implode($nu3));
        echo ($nu1 + $nu2 + $nu3), "\n";
    }
    
?>
