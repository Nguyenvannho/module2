<?php
    /*
    $GLOBALS;
    $_SERVER;
    $_REQUEST;
    $_POST;
    $_GET;
    */

// echo ' <pre>';
// print_r($_SERVER['REQUEST_METHOD']);
// echo '</pre>';
// kiem tra nguoi dung gui di lieu len
if($_SERVER['REQUEST_METHOD']=='POST'){
    // xu ly du lieu duoc gui len
echo ' <pre>';
print_r($_REQUEST);
echo '</pre>';
// memory
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];
    // kiem tra du lieu duoc luu vao bo nho
    var_dump($username);
    var_dump($password);

    // Xu ly
    if($username == 'admin' && $password == '123') {
        // xuat
        echo 'Hello admin';
    }else {
        // xuat
        echo 'Chao ban da dang nhap he thong';
    }
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
    <form action="" method="POST">
        Username: <input type="text" name="username" value=""> <br>
        Password: <input type="password" name="password" value=""> <br>
    <button type="submit">Gui</button>
    </form>

</body>
</html>