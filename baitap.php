<?php
// bài 1:
// $age = 18;
// if($age>= 18){
// echo"bạn cứ núc bia đi";
// }

// bài 2:
// $money = true;
// $age = 18;
// if($age>=18 && $money == true){
// echo "bạn cứ núc cho cạn ly nhé";
// }

// bài 3:
// $money = true;
// $age = 18;
// if($age >=18 || $money == true){
//     echo "bạn cứ tứa bia đi";
// }

// bài 4:
// $age = 20;
// if( $age <= 18) {
//     echo "bạn uống nước ngọt nha";
// }

// bài 5:
// $money = true;
// $quan_open = true;
// $cho_no = true;
// if($quan_open && ($money == true || $cho_no == true)) {
//     echo "được nhậu nhưng nhớ trả tiền nợ";
// }

// bài 6 :
// $money = false;
// $quan_open = false;
// $cho_no = false;
// if($quan_open && $money  && $cho_no) {
//     echo "được nhậu nhưng nhớ trả tiền nợ";
// }else{
//     echo "về nhà cả bị sư tử hà đông cau mày";
// }

// bài 7:
// $day = 3;
// if($day >=2 && $day <=6) {
//     echo"đi làm";
// }else if($day ==7) {
//     echo "xin hoạt clb";
// }else{
//     echo"relax";
// }

// bài 8:
//     $month = 3;
//    switch ($month) {
//     case ($month == 1):
//         echo"Tháng này có 31 ngày";
//         break;
//     case ($month == 2):
//         echo" tháng có 28 ngày";
//         break;
//     default:
//         echo" tháng có 30 ngày";
//         break;
//    }

// bài 9:
//    $day = 5;
//    switch ($day) {
//     case 2 :
//     case 3 :
//     case 4 :
//     case 5 :
//     case 6 :
//        echo " Đang đi làm ";       
//         break;
//     case 7 :
//         echo " Đi sinh hoạt CLB";
//         break;
//     default:
//         echo "relax";
//         break;
//    }

// bài 10:
// $age = 11;
// echo($age >= 18) ? "Uống bia" : "Uống rượu";

// bài 11:
// $day = 9;
// switch (true)
// {
//     case($day >=2 && $day <=6):
//         echo"di lam";
//         break;
//     case($day == 7):
//         echo"sinh hoat";
//         break;
//     default:
//     echo "relax";
//         break;
// }

// bài 12:

// for($i=0; $i<=5;$i++){
// echo $i ;
// }

// bài 13:
// for ($i= 1; $i <= 10 ; $i++){
//     echo '5 x '.$i.' =' . 5* $i ;
//     echo '<br>';
// }


// bài 14:
// for($i= 1;$i <=100;$i++){
//     if($i % 2 ==0){
//         echo $i;
//     }
// }

// bài 15:
// for($i=100;$i>=1;$i--){
//     if($i % 2 ==1){
//         echo $i;
//         echo"<br>";
//     }
// }

// bài 16:
// $i = 0;
// while ($i <= 5) {
//     echo $i;
//     $i++;
// }

// bài 17:
// $i = 10;
// while ($i >= 1) {
//     echo $i;
//     $i--;
// }

// bài 18:
// $i = 10;
// do{
//     echo $i;
//     $i--;
// }while ($i>= 5);

// bài 19:
// for($i= 1;$i<=10;$i++){
//     if($i==5){
//         break;
//     }
//     echo $i;
// }
// bài 20:
// for($i=1;$i<=10;$i++){
//     if($i%2==1){
//        continue;
//     }
//     echo $i;
// }
// bài 21:

// echo "<table>";
// for ($i = 1; $i <= 8; $i ++){
//  echo "<tr>";
// for($j = 1; $j <= 3; $j ++){
//  echo "<td>" . $i . $j. "</td>";
// }
// echo "</tr>";
// }
// echo "</table>";
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
        so_a: <input type="number" name="so_a" value="">
        <select name="pheptinh">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        so_b: <input type="number" name="so_b" value="">
        <button type="submit">Gui</button>
    </form>
    <?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        // memory
        $so_a = $_REQUEST['so_a'];
        $so_b = $_REQUEST['so_b'];
        $phep_tinh = $_REQUEST['pheptinh'];

        // kiem tra du lieu duoc luu vao bo nho
        switch ($phep_tinh) {
            case '+':
                $kq = $so_a + $so_b;
                echo $kq;
                break;
            case '-':
                $kq = $so_a - $so_b;
                echo $kq;
                break;
            case '*':
                $kq = $so_a * $so_b;
                echo $kq;
                break;
            case '/':
                if ($so_b == 0) {
                    echo "lỗi kĩ thuật";
                } else {
                    $kq = $so_a / $so_b;
                    echo $kq;
                }
                break;
            default:
                break;
        }
    }
    ?>


</body>

</html>