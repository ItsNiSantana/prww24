<?php

    $n = 5;
    
    while ($n--) {
        $entrada[] = str_split(readline());
    }
    
    foreach ($entrada as $linha) {
        array_pop($linha);
        array_pop($linha);
    }
    
    $numeros = [
        '**** ** ** ****' => 0,
        '  *  *  *  *  *' => 1,
        '***  *****  ***' => 2,
        '***  ****  ****' => 3,
        '* ** ****  *  *' => 4,
        '****  ***  ****' => 5,
        '****  **** ****' => 6,
        '***  *  *  *  *' => 7,
        '**** ***** ****' => 8,
        '**** ****  ****' => 9
    ];
    
    $nentrada = [];
    $i = 0;
    
    while ($i < count($entrada[0])) {
        $array = [
            $entrada[0][$i], $entrada[0][$i + 1], $entrada[0][$i + 2],
            $entrada[1][$i], $entrada[1][$i + 1], $entrada[1][$i + 2],
            $entrada[2][$i], $entrada[2][$i + 1], $entrada[2][$i + 2],
            $entrada[3][$i], $entrada[3][$i + 1], $entrada[3][$i + 2],
            $entrada[4][$i], $entrada[4][$i + 1], $entrada[4][$i + 2]
        ];
        array_push($nentrada, implode("", $array));
        $i += 4;
    }
    $nmostrado = "";
    foreach ($nentrada as $numero) {
        if(array_key_exists($numero, $numeros))
            $nmostrado .= $numeros[$numero];
    }
    if(intval($nmostrado) % 6 == 0 && count($nentrada) == strlen($nmostrado))
        echo "BEER!!\n";
    else
        echo "BOOM!!\n";
        
?>
