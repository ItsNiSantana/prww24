<?php

list($a, $b, $c) = explode(' ', readline());

$delta = pow($b, 2) - (4*$a*$c);

if($a>0 and $delta>=0):
    
    $x1 = ((-$b) + pow($delta, 0.5))/(2*$a);
    $x2 = ((-$b) - pow($delta, 0.5))/(2*$a);
    echo "R1 = ",  number_format($x1, 5, '.', ''), "\n";
    echo "R2 = ", number_format($x2, 5, '.', ''), "\n";
    
else:
    
    echo "Impossivel calcular\n";
    
endif;

?>
