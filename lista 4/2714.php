<?php
$n = readline();
$i = 0;
while($i<$n){
    
    $ra = readline();
    
    if(strlen($ra)<20){
        echo "INVALID DATA\n";
    }
    else{
        if(substr($ra, 0, 2) != 'RA'){
            echo "INVALID DATA\n";
        }
        else{
            $ra_sem_ra = str_replace('RA', '', $ra);
            $senha = str_replace('0', '', $ra_sem_ra);
            echo $senha, "\n";
        }
    }
    $i++;
}

?>
