<?php
$A = [5, 8, 6, 34, 22, 40, 11, 18, 23, 44];
$n = count($A);
$min = 0;
for($i = 1; $i<count($A)-1; $i++){
    $min = $i;
    for($j=$i + 1;$j<$n;$j++){
        if($A[$j] < $A[$min])
            $min = $j;
        }
        if($min != $i){
            $t = $A[$min];
            $A[$min] = $A[$i];
            $A[$i] = $t;
        }
    } 

echo '<pre>';
print_r($A);
die();
?>
