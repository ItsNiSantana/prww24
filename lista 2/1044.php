<?php

    list($a, $b) = explode(' ', readline());
    
    $a = intval($a);
    $b = intval($b);
    
    if(($a%$b)==0 or ($b%$a)==0):
        echo "Sao Multiplos\n";
    else:
        echo "Nao sao Multiplos\n";
        
    endif;    
?>