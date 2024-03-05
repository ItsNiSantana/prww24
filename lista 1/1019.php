<?php
$t = intval(readline());
$h = array(0, 0, 0);

while($t > 0) {
    switch($t) {
        case $t < 60:
            $h[2] = $t;
            $t = 0;
        break;
        case $t < 3600:
            $h[1] = intval($t / 60);
            $t %= 60;
        break;
        default:
            $h[0] = intval($t / 3600);
            $t %= 3600;
    }
}

echo $h[0] , ":" , $h[1] , ":" , $h[2] , "\n";
?>