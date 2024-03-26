<?php

$senhacorreta = false;

while(!$senhacorreta){
    if(intval(readline()) == 2002){
        echo "Acesso Permitido\n";
        $senhacorreta = true;
    }
    else{
        echo "Senha Invalida\n";
    }
}

?>
