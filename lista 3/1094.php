<?php
$n = intval(readline());
$ratos = 0;
$sapos = 0;
$coelhos = 0;
$cobaias = 0;
for ($i = 1; $i <= $n; $i++) {
    list($qtd, $animal) = explode(" ", readline());
    $cobaias += $qtd;
    if ($animal == 'C')
        $coelhos += $qtd;
    elseif ($animal == 'S')
        $sapos += $qtd;
    elseif ($animal == 'R')
        $ratos += $qtd;
}

$pcoelhos = ($coelhos / $cobaias) * 100;
$pratos = ($ratos / $cobaias) * 100;
$psapos = ($sapos / $cobaias) * 100;

echo "Total: ", $cobaias, " cobaias\n";
echo "Total de coelhos: ", $coelhos, "\n";
echo "Total de ratos: ", $ratos, "\n";
echo "Total de sapos: ", $sapos, "\n";
echo "Percentual de coelhos: ", number_format(($pcoelhos), 2, '.', '') . " %\n";
echo "Percentual de ratos: ", number_format(($pratos), 2, '.', '') . " %\n";
echo "Percentual de sapos: ", number_format(($psapos), 2, '.', '') . " %\n";
?>
