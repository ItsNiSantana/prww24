<?php
    $x = intval(readline());
    $n = $x;
    if(($n%2)==0){
        $n = $n + 1;
    }
    $i=0;
    while($i<=5){
    echo $n, "\n";
    $n = $n +2;
    $i++;
    }
?>