
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
  <label for="">Mô tả sản phẩm</label><br>
  <input type="text"  name="ProductDescription"><br>
  <label for="">Bảng giá</label><br>
  <input type="text"  name="ListPrice" ><br>
  <label for="">Phần trăm giảm giá</label><br>
  <input type="text"  name="DiscountPercent"><br>
  <input type="submit" value="Tính">
</form> 
</body>
</html>
<?php
if ($_SERVER['REQUEST_METHOD']=='POST') {
    $ProductDescription = $_REQUEST['ProductDescription'];
    $ListPrice = $_REQUEST['ListPrice'];
    $DiscountPercent = $_REQUEST['DiscountPercent'];
    if($ProductDescription == '' && $ListPrice == '' && $DiscountPercent == ''){
      echo 'Nhập vào';
    }else{
      $DiscountAmount = $ListPrice * $DiscountPercent * 0.1 ;
      echo 'Kết quả: '. $DiscountAmount; 
    }

}
?>