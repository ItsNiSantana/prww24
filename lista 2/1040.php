<?php
list($n1, $n2, $n3, $n4) = explode(' ', readline());

$media = (($n1*2)+($n2*3)+($n3*4)+($n4*1))/10;
$media = round($media,1, PHP_ROUND_HALF_EVEN);
echo "Media: ", number_format($media, 1, '.', ''), "\n";

if($media>=7.0):
    
    echo "Aluno aprovado.\n";
    
elseif($media>=5.0 and $media<=6.9):
    
    echo "Aluno em exame.\n";
    $exame = readline();
    $mediafinal = ($exame + $media)/2;
    echo "Nota do exame: ", $exame, "\n";
    if($mediafinal>=5.0):
        echo "Aluno aprovado.\n";
        echo "Media final: ", number_format($mediafinal, 1, '.', ''), "\n";
    else: 
        echo "Aluno reprovado.\n";
        echo "Media final: ", number_format($mediafinal, 1, '.', ''), "\n";
    endif;
else:
    echo "Aluno reprovado.\n";
endif;

?>