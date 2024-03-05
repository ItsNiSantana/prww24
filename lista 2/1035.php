<?php

list($a, $b, $c, $d) = explode(' ', readline());

$cd = $c + $d;
$ab = $a + $b;

if($b>$c and $d>$a and $cd>$ab and $c>=0 and $d>=0 and $a % 2 == 0):
    
    echo "Valores aceitos\n";
    
else:
    
    echo "Valores nao aceitos\n";
    
endif;

?>