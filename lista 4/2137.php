<?php
while (true) {
        $n = intval(readline());
        $codlivros = [];

        if ($n==0){
            break;
        }
        for($x = 0; $x<$n; $x++){
            $codlivro = readline();
            $codlivros[]=$codlivro;
        }
        sort($codlivros);
        foreach ($codlivros as $codlivro) {
            echo $codlivro, "\n";
        }
}
?>
