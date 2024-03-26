<?php
$x = intval(readline());
$y = intval(readline());
$soma = 0;

if ($y < $x) {
    $aux = $x;
    $x = $y + 1;
    $y = $aux;
}

for ($i = $x; $i < $y; $i++) {
    if ($i % 2 != 0) {
        if ($i < 0) {
            $soma -= $i * (-1);
        } else {
            $soma += $i;
        }
    }
}

echo $soma, "\n";
?>
