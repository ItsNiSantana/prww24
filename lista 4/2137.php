<?php

$n = intval(readline());
$x = 1;

if ($n === 0) {
    break;
    
}

$aux=0000;

while($x<=$n){
    $codlivros = array_map('intval', explode(' ', readline()));
    if($codlivros < strlen($aux)){
        break;
    }
    $x++;
}
sort($codlivros);
for($i=0;$i<=$n;$i++){
    echo $codlivros[$i], "\n";
    
}

?>
