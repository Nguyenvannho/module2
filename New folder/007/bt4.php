<?php 
if($_SERVER['REQUEST_METHOD']=='POST'){
$so_phone = $_REQUEST['so_phone'];
function phone($str){
    $regexp = '/^\([0-9]{2,2}\)\-\(0[0-9]{9,9}\)$/';
    if(preg_match($regexp, $str)){
        echo('Số điện thoại hợp lệ');
    }else{
        echo ('Số điện thoại không hợp lệ');
    }
}
phone('(84)-(0978489648)');
echo "</br>";
phone('(a8)-(22222222)');
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
    <form action=""method="POST">
        so_phone:<input type="number" name="so_phone" value="" placeholder="chi_nhap_so"/>
        <button type="submit">Nhập</button>
    </form>
</body>
</html>