<?php

$x = intval(readline());
$y = number_format(readline(), 1, '.', '');

$consumo = $x/$y;
    
echo number_format($consumo, 3, '.', ''), " km/l\n";

?>