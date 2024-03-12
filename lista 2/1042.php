<?php

    $n = explode(" ", readline());
    $n[0] = intval($n[0]);
    $n[1] = intval($n[1]);
    $n[2] = intval($n[2]);
    $ndecrescente = $n;
    sort($n);
    foreach($n as $valor){
        echo "$valor\n";
    }
    echo "\n";
    foreach($ndecrescente as $valor){
        echo "$valor\n";
    }
?>