<?php
    $numbers = [1,2,3,4,5];
    $index = 0;
    $find = 4;
    for($i = 1; $i < count($numbers); $i++){
        if($numbers[$i] == $find){
            $index = $i;
        }
    }
    unset($numbers[$index]);
    echo '<pre>';
    print_r($numbers);
    echo '</pre>';
    echo $index;



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