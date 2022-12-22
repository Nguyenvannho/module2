<?php 
//   function dem_so_xuat_hien($numbers, $value){
    // $numbers = [67,45,23,9,1];
    // $value = 45;
    // $count = 0 ;
    // for($i= 0 ; $i < count($numbers);$i++){
    //     if($numbers[$i]==$value){
    //         $count++;
    //     }
    // }
    // echo $count;
// } 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $socantim = $_POST['socantim'];

$numbers = [2,3,5,7,9,10,3,25];
$count = 0;
foreach ($numbers as $key => $value) {
    if($value == $socantim) {
        $count ++;
    }
}
echo "Tìm thấy số ". $socantim ." xuất hiện ".$count ." lần";                                                               
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
<form method='post'>
        <label for="">Nhập số phần tử cần tìm</label><br>
        <input type="text" name="socantim"><br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>