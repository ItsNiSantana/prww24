<?php

    list($a, $b, $c) = explode(' ', readline());
    
    $ab = $a + $b;
    $ac = $a + $c;
    $bc = $b + $c;
    
    if($a<$bc and $b<$ac and $c<$ab):
        $p = $ab + $c;
        echo "Perimetro = ", number_format($p, 1, '.', ''), "\n";
    else:
        $area = (($a+$b)*$c)/2;
        echo "Area = ", number_format($area, 1, '.', ''), "\n";
        
    endif;    
?>