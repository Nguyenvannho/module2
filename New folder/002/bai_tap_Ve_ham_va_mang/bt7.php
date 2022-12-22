<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $text = "xin chao tat cac cac ban";
    $count = 0;
    $tucantim = $_REQUEST["name"];
    for ($i = 0; $i < strlen($text); $i++) {
        if ($tucantim == $text[$i]) {
            $count++;
        }
    }
}
echo $count;
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
        nhap_chu:<input type="text" name="name" value=""><br>
        <button type="submit">Kếtquả</button>
    </form>
</body>

</html>