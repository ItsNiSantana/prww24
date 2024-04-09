<?php
$inicio = 1;
$fim = 10;
$cont = 0;
$acc = 0;
$O = readline();

$m = array();
for ($l = 0; $l < 12; $l++) {
    for ($c = 0; $c < 12; $c++) {
        $m[$l][$c] = floatval(readline());
    }
}

for ($l = 0; $l < 5; $l++) {
    for ($c = $inicio; $c <= $fim; $c++) {
        $acc += $m[$l][$c];
        $cont++;
    }
    $inicio++;
    $fim--;
}

if ($O === 'M') {
    $acc /= $cont;
    
}
echo number_format($acc, 1, '.', ''), "\n";
?>
