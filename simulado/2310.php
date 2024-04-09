<?php
$n = readline();

$saquet = 0;
$saquesu = 0;
$bloqueiot = 0;
$bloqueiosu = 0;
$ataquet = 0;
$ataquesu = 0;

for($i=0; $i<$n; $i++){
    $nome = readline();
    list($s, $b, $a) = explode(" ", readline());
    list($s1, $b1, $a1) = explode(" ", readline());
    
    $saquet += $s;
    $saquesu += $s1;
    $bloqueiot += $b;
    $bloqueiosu += $b1;
    $ataquet += $a;
    $ataquesu += $a1;
}

$psaque = ($saquesu * 100)/$saquet;
$pbloqueio = ($bloqueiosu * 100)/$bloqueiot;
$pataque = ($ataquesu * 100)/$ataquet;

echo "Pontos de Saque: ", number_format(round($psaque, 2, PHP_ROUND_HALF_UP), 2, '.', ''), " %.\n";
echo "Pontos de Bloqueio: ", number_format(round($pbloqueio, 2, PHP_ROUND_HALF_UP), 2, '.', ''), " %.\n";
echo "Pontos de Ataque: ", number_format(round($pataque, 2, PHP_ROUND_HALF_UP), 2, '.', ''), " %.\n";

?>
