<?php
while (true) {
        $n = intval(trim(fgets(STDIN)));
        $codlivros = [];

        for($x = 1; $x<$n; $x++){
            $codlivros[] = trim(fgets(STDIN));
    
        }
        sort($codlivros);
        foreach ($codlivros as $codlivro) {
            echo $codlivro, "\n";
        }
}
?>
