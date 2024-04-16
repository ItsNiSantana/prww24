<?php
while (true) {
    $k = readline();
    if($k == 0){
        break;
    }
    list($n, $m) = explode(" ", readline());
    
    for($i = 0; $i < $k; $i++){
        list($x, $y) = explode(" ", readline());
    
        if($x == $n or $y == $m){
            echo "divisa\n";
        }
        elseif($x > $n and $y > $m){
            echo "NE\n";
        }
        elseif($x < $n and $y > $m){
            echo "NO\n";
        }
        elseif($x < $n and $y < $m){
            echo "SO\n";
        }
        elseif($x > $n and $y < $m){
            echo "SE\n";
        }
    }
}
?>