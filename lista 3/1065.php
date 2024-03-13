<?php
    $v[0]=readline();
    $v[1]=readline();
    $v[2]=readline();
    $v[3]=readline();
    $v[4]=readline();

    $valor = 0;
    $i=0;

    while($i <= 4){
        if(($v[$i]%2)==0){
            $valor = $valor + 1;
        }
        $i++;
    }
    
    echo $valor, " valores pares\n";
?>