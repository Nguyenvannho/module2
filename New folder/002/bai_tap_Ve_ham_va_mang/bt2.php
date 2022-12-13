<?php
$arr = [
    [1, 2, 6],
    [3, 76, 87]
];
$max = $arr[0][0];
for ($i = 0; $i < count($arr); $i++) {
    for ($j = 0; $j < count($arr[$i]); $j++) {
        if ($arr[$i][$j] > $max) {
            $max = $arr[$i][$j];
        }
    }
}
echo $max;
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