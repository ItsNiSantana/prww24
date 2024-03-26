<?php

$n = intval(readline());

for ($i = 0; $i < $n; $i++) {
    $v = intval(readline());
    if ($v % 2 == 0 and $v > 0) {
        echo "EVEN POSITIVE\n";
    } elseif ($v % 2 == 0 and $v < 0) {
        echo "EVEN NEGATIVE\n";
    } elseif ($v % 2 != 0 and $v > 0) {
        echo "ODD POSITIVE\n";
    } elseif ($v % 2 != 0 and $v < 0) {
        echo "ODD NEGATIVE\n";
    } elseif ($v == 0) {
        echo "NULL\n";
    }
}
?>
