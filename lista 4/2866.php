<?php

    $n = trim(intval(fgets(STDIN)));
    
    while($n--) {
        $palavra = trim(fgets(STDIN));
        $tam = strlen($palavra);
        $resposta = '';
        $i = $tam - 1;
    
    while($tam--) {
        if(ctype_lower($palavra[$i])) {
            $resposta .= $palavra[$i--];
        }else{
            $i--;
        }
    }
    echo $resposta, "\n";
}

?>
