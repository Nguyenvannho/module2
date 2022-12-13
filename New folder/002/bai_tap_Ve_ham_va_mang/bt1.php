<?php
// function gia_tri_nho_nhat($arr){
// $index = 0;
// $min = $arr[0];
// foreach($arr as $key => $value){
//     if($value < $min){
//         $min = $value;
//         $index = $key;
//     }
// }
// echo'số nhỏ nhất là:'.$min.'vị trí:'.$index;    
// //    return $min;
// }
// $arr1 = [108,31,766,313,27];
// $min = gia_tri_nho_nhat($arr1);
// // echo $min;
$arr= ['2','2','1', '200', '15', '300', '500', '69', '422','399', '201', '299'];
sort($arr);
for($i=0;$i<count($arr);$i++){
    if($arr[0]!==$arr[$i] && $arr[$i]!==$arr[$i+1]){
        echo $arr[$i];
        echo '<br>';
        echo $arr[$i+1];
        break;
    }
}
// for($arr)
// echo "số nhỏ thứ hai $So_nho_thu_hai";




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