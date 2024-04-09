<?php
$n = intval(readline());

for ($i = 0; $i < $n; $i++) {
    $p = readline();
    $d = intval(readline());

    for ($j = 0; $j < strlen($p); $j++) {
        if (ord($p[$j]) - $d < ord('A')) { //ord = se a string estiver em codificação de um byte, é equivalente a retornar a posição de um caractere na tabela de mapeamento do conjunto de caracteres.
            $l = chr(ord('[') - ($d - (ord($p[$j]) - ord('A')))); //chr = Gera uma string de byte único a partir de um número.
            echo $l;
        } else {
            $l = chr(ord($p[$j]) - $d);
            echo $l;
        }
    }
    echo "\n";
}
?>
