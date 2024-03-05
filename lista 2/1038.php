<?php
list($codigo, $qtd) = explode(' ', readline());

switch ($codigo) {
    case 1:
        $total = 4.00 * $qtd;
        echo "Total: R$ ", number_format($total, 2, '.', ''), "\n";
        break;
    case 2:
        $total = 4.50 * $qtd;
        echo "Total: R$ ", number_format($total, 2, '.', ''), "\n";
        break;
    case 3:
        $total = 5.00 * $qtd;
        echo "Total: R$ ", number_format($total, 2, '.', ''), "\n";
        break;
    case 4:
        $total = 2.00 * $qtd;
        echo "Total: R$ ", number_format($total, 2, '.', ''), "\n";
        break;
    case 5:
        $total = 1.50 * $qtd;
        echo "Total: R$ ", number_format($total, 2, '.', ''), "\n";
        break;
}
?>