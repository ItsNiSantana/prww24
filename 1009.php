<?php

$nomev = strlen(readline());
$salariofixo = readline();
$tvendasdinheiro = readline();
$comissao = 0.15;

$salariofinal = number_format(round($salariofixo + ($tvendasdinheiro * $comissao), 2 , PHP_ROUND_HALF_EVEN), 2, '.', '');

echo "TOTAL = R$ " , $salariofinal , "\n";

?>