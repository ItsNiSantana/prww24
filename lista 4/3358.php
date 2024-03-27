<?php

$n = intval(readline());

for($i=1;$i<=$n;$i++){
    $sobrenome = strtolower(readline());//ler o sobrenome em string minusculas
    $c3 = 0; //Consoantes
    
    for($x=0; $x < strlen($sobrenome); $x++){
        if ($sobrenome[$x] != 'a' and $sobrenome[$x] != 'e' and $sobrenome[$x] != 'i' and $sobrenome[$x] != 'o' and $sobrenome[$x] != 'u') {
            $c3++;
        } else {
            $c3 = 0;
        }
        if ($c3 == 3) {
            echo ucfirst($sobrenome), " nao eh facil\n";
            break;
        }
    }
    if ($c3 < 3) {
        echo ucfirst($sobrenome), " eh facil\n";
    }
}


?>
