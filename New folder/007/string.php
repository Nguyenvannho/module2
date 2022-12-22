<?php
// $str = "Tôi, học, PHP, tại, Codegym";
// echo "Tạ Đình Phong nói: \"$str\"";
// echo "<br>";
// echo 'Tạ Đình Phong nói:\''.$str. '\' ';
// echo "<br>";
// echo 'Tạ Đình Phong nói:"' .$str. ' "';

// $explode = explode(separator: ',', $str);

// $arr = [
//     0 => 'Tôi',
//     1 => 'Học ',
//     2 => 'PHP',
//     3 => 'Tại CodeGym'
// ];
// print_r(implode(separator: ', ', $arr));
$ip = '192.168.1.1';
$ip_arr = explode('.', $ip);
var_dump($ip_arr);
?>