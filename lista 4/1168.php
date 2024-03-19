<?php
$n = readline();

for($x=0;$x<$n;$x++){
    $array = [6,2,5,5,4,5,6,3,7,6];
    $nu = readline();
    $t=0;
    
    for ($i = 0;$i <=9; $i++){
    $oc = substr_count($nu, strval($i));
    $t += $array[$i] * $oc;
    }
echo $t, " leds\n";
}
?>