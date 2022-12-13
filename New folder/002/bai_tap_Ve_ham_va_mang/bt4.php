<?php
$numbers_1 = [4, 7, 9];
$numbers_2 = [1, 8, 6];
$numbers_3 = [];
//gộp mảng
foreach ($numbers_1 as $key => $value) {
    array_push($numbers_3, $value);
}
foreach ($numbers_2 as $key => $value) {
    array_push($numbers_3, $value);
}

echo '<pre>';
print_r($numbers_3);
echo '</pre>';
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