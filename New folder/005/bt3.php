<?php 
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $chuoi_so = $_POST["so_dien_thoai"];
    $viettel = [];
    $mobi = [];
    $vina = [];
    $mang_so = explode(",",$chuoi_so);
    foreach ($mang_so as $so_dt) {
        $tim_so = substr($so_dt,0,3);
        if($tim_so == "096" || $tim_so == "097" || $tim_so == "098" || $tim_so == "086" || $tim_so == "032" || $tim_so == "033" || $tim_so == "034" || $tim_so == "035" || $tim_so == "036" || $tim_so == "037" || $tim_so == "038" || $tim_so == "039"){
            array_push($viettel, $so_dt);
        } else if($tim_so == "083" || $tim_so == "084" || $tim_so == "085" || $tim_so == "088" || $tim_so == "091" || $tim_so == "094" || $tim_so == "082" || $tim_so == "081"){
            array_push($vina, $so_dt);
        } else if($tim_so == "070" || $tim_so == "076" || $tim_so == "077" || $tim_so == "078" || $tim_so == "079" || $tim_so == "089" || $tim_so == "090" || $tim_so == "093"){
            array_push($mobi,$so_dt);
        }
    }
    echo "<br>Các số viettel là: ".implode(",",$viettel);
    echo "<br>Các số mobifone là: ".implode(",",$mobi);
    echo "<br>Các số vinaphone là: ".implode(",",$vina);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phân laoik số điện thoại</title>
</head>
<body>
    <form action="" method ="POST">
        <textarea name="so_dien_thoai"></textarea>
        <input type="submit"value="kết quả"/>
    </form>
</body>
</html>