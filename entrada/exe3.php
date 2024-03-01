<?php
$name= $_GET['name'];
$email= $_GET['idade'];
$password= $_GET['salario'];
echo $name . "\n";
echo $idade . "\n";
echo $salario . "\n";

/*INSS*/
if ($salario>=7786.03):
    echo "INSS isento"; 
elseif($salario>=4000.04 && $salario<=7786.02):
    $inss = ($salario * 0.14) - 181.18;
    echo "INSS = ", $inss;
elseif($salario>=2666.69 && $salario<=4000.03):
    $inss = ($salario * 0.12) - 101.18;
    echo "INSS = ", $inss;
elseif($salario>=1412.01 && $salario<=2666.68):
    $inss = ($salario * 0.09) - 21.18;
    echo "INSS = ", $inss;
elseif($salario<=1412.00):
    $inss = $salario * 0.075;
    echo "INSS = ", $inss;
endif;

$salariomodificado = $salario - $inss;

if ($salario>=4664.68):
    $ir = $salariomodificado * 0.275;
    echo "IRPF = ", $ir;
elseif($salario>=3751.06 && $salario<=4664.68):
    $ir = $salariomodificado * 0.225;
    echo "IRPF = ", $ir;
elseif($salario>=2826.66 && $salario<=3751.05):
    $ir = $salariomodificado * 0.15;
    echo "IRPF = ", $ir;
elseif($salario>=2259.21 && $salario<=2826.65):
    $ir = $salariomodificado * 0.075;
    echo "IRPF = ", $ir;
elseif($salario<=2259.20):
    echo "IRPF Isento";
endif;

$salariofinal = $salariomodificado - ir;
echo "Seu salario final = ", $salariofinal;

?>
