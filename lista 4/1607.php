<?php

$t = intval(trim(fgets(STDIN)));


for ($i = 0; $i < $t; ++$i) {
    list($a, $b) = explode(" ", trim(fgets(STDIN)));

    $dif = 0;

    for ($j = 0; $j < strlen($a); ++$j) {
        $dif += (ord($b[$j]) - ord($a[$j]) + 26) % 26;
    }

    echo $dif, "\n";
}
?>
