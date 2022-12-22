<?php
$numbers = [2,5,8,12,16,23,38,56,72,91];
$l = 0;
$r = count($numbers) - 1;
$find = 23;
while ($l <= $r){
    $m = floor(($l + $r) / 2);
    if($numbers[$m] < $find){
        $l = $m + 1;
    }elseif($numbers[$m] > $find){
        $r = $m - 1;
    }else{
        echo 'tim thay'.$find.'tai'.$m;
        break;
    }
}
?>