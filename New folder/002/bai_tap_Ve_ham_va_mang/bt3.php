<?php
function calculate($x,$y){
    echo "tổng là : ".$x + $y ;
    echo '<br>';
    echo "hiệu là : ".$x - $y ;
    echo '<br>';
    echo "tích là : ".$x * $y ;
    echo '<br>';
    if( $y == 0){
        echo 'mẫu số phải khác 0' ;
    }else{
        echo "thương là : ".$x / $y ;
    }
}
$calculate = calculate(200,20);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>