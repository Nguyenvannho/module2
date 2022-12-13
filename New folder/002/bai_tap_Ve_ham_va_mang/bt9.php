<?php
$arr = [
    [0, 1, 2],
    [3, 4, 5]
];
$stt = 1;
$sum = 0;
for ($i = 0; $i < count($arr); $i++) {
    for ($j = 0; $j < count($arr[$i]); $j++) {
        if ($j == $stt) {
            $sum += $arr[$i][$j];
        }
    }
}
echo $sum;

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