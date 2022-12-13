<?php
$numbers = [8946, 83232, 1000, 84321];
$gia_tri_nho_nhat = $numbers[0];
$arr = count($numbers);
for ($i = 0; $i < $arr; $i++) {
    if ($gia_tri_nho_nhat > $numbers[$i]) {
        $gia_tri_nho_nhat = $numbers[$i];
    }
}
echo $gia_tri_nho_nhat;
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