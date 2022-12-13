<?php
$text = "xin chao tat cac cac ban";
$tucantim = "c";
$count = 0;
for ($i = 0; $i < strlen($text); $i++) {
    if ($text[$i] == $tucantim) {
        $count++;
    }
}
echo $count;
?>



<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action=""method='post'>
<label for="">Nhập một chuỗi</label><br>
  <input type="text"  name="nhapmotchuoi" ><br>
  <label for="">Nhập chữ cần tìm :</label><br>
  <input type="text"  name="nhapchucantim" ><br>
  <input type="submit" value="Submit">
</form>
</body>
</html>
  -->   