<?php
while(true){
$l = readline();
for($i = 0; $i < 5; $i++){
    $linha = 0;
    while($linha<5){
        $coluna = 0;
        while($coluna<5){
            $v = readline();
                if($l<=$v){
                    echo "Valor Encontrado: ", $v;
                    echo " Linha: ", $linha;
                    echo " Coluna: ", $coluna, "\n";
                }
                else{
                    $coluna--;
                }
            $coluna++;
        }
        $linha++;
    }
    
}
}
?>
