<?php
    $valor = readline();

if($valor>=0.00 and $valor<=400.00):
    
    $reajuste = $valor * 0.15;
    $nvalor = $valor + $reajuste;
    echo "Novo salario: ", number_format($nvalor, 2, '.', ''), "\n";
    echo "Reajuste ganho: ", number_format($reajuste, 2, '.', ''), "\n";
    echo "Em percentual: 15 %\n";
    
elseif($valor>=400.01 and $valor<=800.00):
    
    $reajuste = $valor * 0.12;
    $nvalor = $valor + $reajuste;
    echo "Novo salario: ", number_format($vnalor, 2, '.', ''), "\n";
    echo "Reajuste ganho: ", number_format($reajuste, 2, '.', ''), "\n";
    echo "Em percentual: 12 %\n";
    
elseif($valor>=800.01 and $valor<=1200.00):
    
    $reajuste = $valor * 0.1;
    $nvalor = $valor + $reajuste;
    echo "Novo salario: ", number_format($nvalor, 2, '.', ''), "\n";
    echo "Reajuste ganho: ", number_format($reajuste, 2, '.', ''), "\n";
    echo "Em percentual: 10 %\n";

elseif($valor>= 1200.01 and $valor<=2000.00):
    
    $reajuste = $valor * 0.07;
    $nvalor = $valor + $reajuste;
    echo "Novo salario: ", number_format($nvalor, 2, '.', ''), "\n";
    echo "Reajuste ganho: ", number_format($reajuste, 2, '.', ''), "\n";
    echo "Em percentual: 7 %\n";
    
else:
    
    $reajuste = $valor * 0.04;
    $nvalor = $valor + $reajuste;
    echo "Novo salario: ", number_format($nvalor, 2, '.', ''), "\n";
    echo "Reajuste ganho: ", number_format($reajuste, 2, '.', ''), "\n";
    echo "Em percentual: 4 %\n";
    
endif;

?>