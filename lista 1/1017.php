<?php

$t = intval(readline());
$v = intval(readline());

$litros = ($t * $v)/12;

echo number_format($litros, 3, '.', ''), "\n";
?>