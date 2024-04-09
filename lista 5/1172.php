<?php
$x = [];

for ($i = 0; $i < 10; $i++) {
    $valor = intval(fgets(STDIN));
    $x[$i] = $valor <= 0 ? 1 : $valor;
}

foreach ($x as $n => $x) {
    echo "X[$n] = $x\n";
}
?>
