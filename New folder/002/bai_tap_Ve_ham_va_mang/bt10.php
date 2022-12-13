<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $sokey = $_REQUEST['number'];
    $number = [14, 36, 56, 30, 11];
    $flag = 0;

    foreach ($number as $key => $value) {

        if ($sokey == $key) {
            echo $value;
            $flag = 1;
        }
    }
    if ($flag == 0) {
        echo 'không có số trong mảng đó';
    }
}

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
    <form action="" method="POST">
        nhap_so: <input type="number" name="number" value=""> <br>
        <button type="submit">Kếtquả</button>
    </form>
</body>

</html>