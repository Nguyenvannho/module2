<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Hiển Thị Các Số Nguyên Tố Nhỏ Hơn 100.</h>
    <?php
    function isPrimeNumber($n)
    {
        if ($n < 2) {
            return false;
        }
        for ($i = 2; $i <= sqrt($n); $i++) {
            if ($n % $i == 0) {
                return false;
            }
        }
        return true;
    }
    echo ("Các số nguyên tố nhỏ hơn 100 là: <br>");
    for ($i = 0; $i < 100; $i++) {
        if (isPrimeNumber($i)) {
            echo ($i . ' ');
        }
    }
    ?>
</body>

</html>