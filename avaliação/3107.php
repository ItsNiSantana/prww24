<?php
$v = readline();
$d = readline();
$c = readline();

$hr = $d/$v;
$combustivel = $d/$c;

echo "Total horas: ", number_format(round($hr, 2 ,PHP_ROUND_HALF_UP), 2, ".", ""), "\n";
echo "Total combustivel: ", number_format(round($combustivel, 2 ,PHP_ROUND_HALF_UP), 2, ".", ""), "\n";
?>