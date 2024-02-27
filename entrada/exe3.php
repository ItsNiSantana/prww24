<?php
$name= $_GET['name'];
$email= $_GET['idade'];
$password= $_GET['salario'];
echo $name . "\n";
echo $idade . "\n";
echo $salario . "\n";

/*INSS*/
if ($salario>=7786.02):
    echo "INSS isento";
    $salariosmodificado = $salario; 
elseif($salario>=4000.04 && $salario<=7786.02):
    $salariomodificado = ($salario * 0.14)-181.18;
    echo "INSS descontado";
elseif($salario>=2666.69 && $salario<=4000.03):
    $salariomodificado = ($salario * 0.12)-101.18;
    echo "INSS descontado";
elseif($salario>=1412.01 && $salario<=2666.68):
    $salariomodificado = ($salario * 0.12)-101.18;
    echo "INSS descontado";
elseif($salario<=2259.20):
    $salariomodificado = $salario * 0.075;
    echo "INSS descontado";
endif;

if ($salario>=4664.68):
    echo "INSS isento";
    $salariosmodificado = $salario; 
elseif($salario>=4000.04 && $salario<=7786.02):
    $salariomodificado = ($salario * 0.14)-181.18;
    echo "INSS descontado";
elseif($salario>=2666.69 && $salario<=4000.03):
    $salariomodificado = ($salario * 0.12)-101.18;
    echo "INSS descontado";
elseif($salario>=1412.01 && $salario<=2666.68):
    $salariomodificado = ($salario * 0.12)-101.18;
    echo "INSS descontado";
elseif($salario<=2259.20):
    $salariomodificado = $salario * 0.075;
    echo "INSS descontado";
endif;

?>