<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
       $username = $_POST['username'];
       $age = $_POST['age'];
       // Doc noi dung tu file
        $string = file_get_contents('users.json');
        // Chuyen chuoi sang mang
        $data = json_decode($string, true);
         //tạo phan tu moi
        $newItem = [
            'name' =>  $username,
            'age' => $age
        ];
        // thêm phan tu vao mang
        array_push($data, $newItem);
        // Chuyen tu mang sang chuoi
        $string = json_encode($data);
         //luu vao file
        file_put_contents( 'users.json', $string);
        // Chuyen huong sang trang danh sach
        header('location: danh_sach.php');
        die();
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
        <h2>Đăng ký người dùng</h2>
        <table>
            <tr>
                <td>Tên người dùng:</td>
                <td><input type="text" name="username" id="" placeholder="Nhập tên"></td>
            </tr>
            <tr>
                <td>Tuổi người dùng:</td>
                <td><input type="number" name="age" id="" placeholder="Nhập tuổi"></td>
            </tr>
            <tr>
                <td><input type="submit" value="Gửi"></td>
            </tr>
        </table>
    </form>
</body>
</html>