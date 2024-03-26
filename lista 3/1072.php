<?php
$nout = 0;
$nin = 0;

$x = intval(readline());

for ($i = 0; $i < $x; $i++) {
    $y = intval(readline());
    if ($y >= 10 and $y <= 20) {
        $nin++;
    } else {
        $nout++;
    }
}

echo $nin," in\n";
echo $nout, " out\n";
?>
