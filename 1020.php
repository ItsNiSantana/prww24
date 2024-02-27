<?php
$idade = intval(readline());
$dt = array(0, 0, 0);

while ($idade > 0) {
    switch($idade) {
        case ($idade < 30):
            $dt[2] = $idade;
            $idade = 0;
        break;
        case ($idade < 365):
            $dt[1] = intval($idade / 30);
            $idade %= 30;
        break;
        default:
            $dt[0] = intval($idade / 365);
            $idade %= 365;
    }
}

echo $dt[0] . " ano(s)\n";
echo $dt[1] . " mes(es)\n";
echo $dt[2] . " dia(s)\n";
?>