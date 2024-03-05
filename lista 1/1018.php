<?php
$notas = array(100, 50, 20, 10, 5, 2, 1);

$valorn = readline();

echo $valorn, "\n";

for ($i = 0; $i < 7; $i++) {
    $count =  intval($valorn / $notas[$i]);
    
    echo $count, " nota(s) de R$ ", $notas[$i], ",00\n";
    
    $valorn %= $notas[$i];
}
?>