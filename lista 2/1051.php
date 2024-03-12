<?php

    $salario = floatval(readline());
    if ($salario >= 0.00 && $salario <= 2000.00){
        echo "Isento\n";
    }
    else{
        if ($salario >= 2000.01 && $salario <= 3000.00){
            $imposto = ($salario - 2000) * 0.08;
        }
        elseif ($salario >= 3000.01 && $salario <= 4500.00){
            $imposto = (1000 * 0.08 + ($salario - 3000) * 0.18);
        }
        else{
            $imposto = (1000 * 0.08) + (1500 * 0.18) + (($salario - 4500) * 0.28);
        }
        $imposto = number_format($imposto, 2, ".", "");
        echo "R$ ", $imposto, "\n";
    }
    
?>