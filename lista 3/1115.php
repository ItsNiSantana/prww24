<?php
$stop = false;
while(!$stop){
    $n = explode(" ", readline());
    $x = $n[0];
    $y = $n[1];

    if($x == 0 or $y == 0){
        $stop = true;
    }
    elseif($x>0 and $y>0){
        echo "primeiro\n";
    }
    elseif($x<0 and $y>0){
        echo "segundo\n";
    }
    elseif($x<0 and $y<0){
        echo "terceiro\n";
    }
    elseif($x>0 and $y<0){
        echo "quarto\n";
    }
}
?>
