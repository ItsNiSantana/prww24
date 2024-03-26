<?php

$n = intval(readline());

for($i = 1; $i<=$n; $i++){
    if($i % 2 == 0){
        $c= $i*$i;
        echo $i,"^2 = ", $c, "\n";
    }
}

?>
