<?php
$n = intval(readline());
$i = 1;
while ($i<=$n) {
    list($r, $s) = explode(" ", readline());
    if ($r === $s) {
        echo "empate\n";
    } 
    elseif ($r === "tesoura" && $s === "papel") {
        echo "rajesh\n";
    }
    elseif ($r === "papel" && $s === "pedra") {
        echo "rajesh\n";
    }
    elseif ($r === "pedra" && $s === "lagarto") {
        echo "rajesh\n";
    }
    elseif ($r === "lagarto" && $s === "spock") {
        echo "rajesh\n";
    }
    elseif ($r === "spock" && $s === "tesoura") {
        echo "rajesh\n";
    }
    elseif ($r === "tesoura" && $s === "lagarto") {
        echo "rajesh\n";
    }
    elseif ($r === "lagarto" && $s === "papel") {
        echo "rajesh\n";
    }
    elseif ($r === "papel" && $s === "spock") {
        echo "rajesh\n";
    }
    elseif ($r === "spock" && $s === "pedra") {
        echo "rajesh\n";
    }
    elseif ($r === "pedra" && $s === "tesoura") {
        echo "rajesh\n";
    }
    else {
        echo "sheldon\n";
    }
    $i++;
}
?>
