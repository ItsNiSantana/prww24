<?php
while (fscanf(STDIN, "%[^\n]%*c", $linha) !== false) {
    fscanf(STDIN, "%d%*c", $p);
    $proc = $clock = 0;
    for ($i = 0; isset($linha[$i]); $i++) {
        if ($linha[$i] === 'W') {
            $clock++;
            if ($proc > 0) {
                $proc = 0;
                $clock++;
            }
        } else {
            $proc++;
            if ($proc === $p) {
                $clock++;
                $proc = 0;
            }
        }
    }
    if ($proc > 0) {
        $clock++;
    }
    echo "$clock\n";
}
?>
