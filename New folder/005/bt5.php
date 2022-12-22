<!-- <?php 
// $numbers = [1,25,75,82,51,76,87,83,84,100];
// $l = 0;
// $r = count($numbers) - 1;
// $find = 76;
// while ($l <= $r) {
//     $m = floor(($l + $r)/2);
//     if($numbers[$m] < $find){
//         $l = $m + 1;
//     }else if($numbers[$m] > $find){
//         $r = $m - 1;
//     }else{
//         echo "tìm thấy".$find."tại".$m;
//         break; 
//     }
// }
?> -->
<?php
   if ( $_SERVER['REQUEST_METHOD']== 'POST') {
   
    $nhapsocandoan = $_REQUEST['nhapsocandoan'];


    function guestNumber($array, $number, $L, $R){
        if ($L > $R){
        return "ERRO!!!";
}
    $mid = (int)(($L + $R) / 2);
    if ($array[$mid] < $number) {
        echo "Số " . $array[$mid] . " đúng không? <br>";
        echo "Không, con số do tôi nghĩ ra lớn hơn con số máy tính đưa ra <br>";
        return guestNumber($array, $number, $mid + 1, $R);
    } elseif ($array[$mid] > $number) {
        echo "Số " . $array[$mid] . " đúng không? <br>";
        echo "Không, con số do tôi nghĩ ra nhỏ hơn con số máy tính đưa ra <br>";
        return guestNumber($array, $number, $L, $mid - 1);
    } else {
        echo "Số " . $array[$mid] . " đúng không? <br>";
        echo "Chính xác, đó là con số tôi đã nghĩ <br>";
    }
}
    $array = range(1,100,1);
    echo guestNumber($array,$nhapsocandoan,0,count($array)-1);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đoán số cần tìm </title>
</head>
<body>
<form action="" method="post">
  <label for="fname"> Nhập số cần đoán :</label><br>
  <input type="text" id="" name="nhapsocandoan" ><br>
  <input type="submit" value="Bắt đầu tìm ">
</form> 
</body>
</html>