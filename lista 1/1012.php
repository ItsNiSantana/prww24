<?php

$pi = 3.14159;
$valores = explode(' ', readline());

$areatri = ($valores[0] * $valores[2])/2;
$areac = $pi * pow($valores[2], 2);
$areatra = (($valores[0] + $valores[1]) * $valores[2])/2;
$areaq = pow($valores[1], 2);
$arear = $valores[0] * $valores[1];

echo "TRIANGULO: ", number_format($areatri, 3, '.', ''), "\n";
echo "CIRCULO: ", number_format($areac, 3, '.', ''), "\n";
echo "TRAPEZIO: ", number_format($areatra, 3, '.', ''), "\n";
echo "QUADRADO: ", number_format($areaq, 3, '.', ''), "\n";
echo "RETANGULO: ", number_format($arear, 3, '.', ''), "\n";

?>