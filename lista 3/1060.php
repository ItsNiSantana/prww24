<?php
    $a[0]=readline();
    $a[1]=readline();
    $a[2]=readline();
    $a[3]=readline();
    $a[4]=readline();
    $a[5]=readline();

    $valor = 0;
    $i=0;

    while($i <= 5){
        if($a[$i]>0){
            $valor = $valor + 1;
        }
        $i++;
    }
    
    echo $valor, " valores positivos\n";
?>