<?php
$p = explode(' ', readline());
$p1 = explode(' ', readline());

$distancia = sqrt((pow(($p1[0] - $p[0]), 2)) + pow(($p1[1] - $p[1]), 2));
    
echo number_format($distancia, 4, '.', ''), "\n";
?>