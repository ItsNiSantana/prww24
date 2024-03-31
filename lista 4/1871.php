<?php
while (true) {
    list($a, $b) = explode(" ", readline());
    $a = intval($a);
    $b = intval($b);

    if($a == 0 or $b == 0){
        break;
    }

        $ab = $a + $b;

        $convercao = strval($ab);
        $r = str_replace('0', '', $convercao);

        echo $r, "\n";
    
}

?>
