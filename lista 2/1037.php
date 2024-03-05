<?php

$valor = readline();

if($valor>=0.00000 and $valor<=25.00000):
    
    echo "Intervalo [0,25]\n";
    
elseif($valor>=25.00001 and $valor<=50.00000):
    
    echo "Intervalo (25,50]\n";
    
elseif($valor>=50.00001 and $valor<=75.00000):
    
    echo "Intervalo (50,75]\n";

elseif($valor>= 75.00001 and $valor<=100.00000):
    
    echo "Intervalo (75,100]\n";
    
else:
    
    echo "Fora do intervalo\n";
    
endif;

?>