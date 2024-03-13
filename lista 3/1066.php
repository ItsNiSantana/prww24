<?php
    $v[0]=readline();
    $v[1]=readline();
    $v[2]=readline();
    $v[3]=readline();
    $v[4]=readline();

    $valorpa = 0;
    $valorim = 0;
    $valorpo = 0;
    $valorne = 0;
    $i=0;

    while($i <= 4){
        if(($v[$i]%2)==0){
            $valorpa = $valorpa + 1;
        }
        $i++;
    }
    $j=0;
    while($j <= 4){
        if(($v[$j]%2)!=0){
            $valorim = $valorim + 1;
        }
        $j++;
    }
    $k=0;
    while($k <= 4){
        if($v[$k]>0){
            $valorpo = $valorpo + 1;
        }
        $k++;
    }
    $l=0;
    while($l <= 4){
        if($v[$l]<0){
            $valorne = $valorne + 1;
        }
        $l++;
    }
    
    echo $valorpa, " valor(es) par(es)\n";
    echo $valorim, " valor(es) impar(es)\n";
    echo $valorpo, " valor(es) positivo(s)\n";
    echo $valorne, " valor(es) negativo(s)\n";
?>