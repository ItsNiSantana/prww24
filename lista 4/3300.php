<?php

    function suerte($n) {
        $nstr = (string) $n;

    if(strpos($nstr, '13') !== false) {
        return true;
    } else {
        return false;
    }
}

    $entrada = intval(readline());

    if (suerte($entrada)) {
        echo $entrada, " es de Mala Suerte\n";
    } else {
        echo $entrada, " NO es de Mala Suerte\n";
    }

?>
