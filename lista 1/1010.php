<?php

$produto = explode(' ', readline());
$produto1 = explode(' ', readline());

$v = $produto[1] * $produto[2];
$v1 = $produto1[1] * $produto1[2];
$valorfinal = $v + $v1;

echo "VALOR A PAGAR: R$ " , number_format($valorfinal, 2, '.', '') , "\n";

?>