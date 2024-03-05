<?php

$number = intval(readline());
$htrabalho = intval(readline());
$valorh = round(readline(), 2);

$salary = $htrabalho * $valorh;

echo "NUMBER = " , $number , "\n";
echo "SALARY = U$ " , number_format($salary, 2, '.' , '') , "\n";

?>