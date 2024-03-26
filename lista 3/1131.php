<?php

$grenais = 0;
$continuar = 1;
$vinter = 0;
$vgremio = 0;
$empates = 0;

while($continuar == 1){
    $grenais++;
    list($golinter, $golgremio) = explode(" ", readline());
    $golinter =  intval($golinter);
    $golgremio =  intval($golgremio);
    
    if($golgremio == $golinter){
        $empates++;
        
    }
    elseif($golinter>$golgremio){
            $vinter++;
    }
    elseif($golgremio>$golinter){
        $vgremio++;
    }
    echo "Novo grenal (1-sim 2-nao)\n";
    $continuar = intval(readline());
}

echo $grenais, " grenais\n";
echo "Inter:", $vinter, "\n";
echo "Gremio:", $vgremio, "\n";
echo "Empates:", $empates, "\n";

if($vgremio == $vinter){
    echo "Nao houve vencedor\n";
}
elseif($vgremio>$vinter){
    echo "Gremio venceu mais\n";
}
else{
    echo "Inter venceu mais\n";
}

?>
