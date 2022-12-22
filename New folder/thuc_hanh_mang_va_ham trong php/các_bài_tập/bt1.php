<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ứng dụng đọc số thành chữ</h1>
    <form method="post">
        <input type="text"name="doi" placeholder="Nhập số cần đọc" />
        <input type="submit"id="submit"value="tìm"/>
    </form>
    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        var_dump($_POST["doi"]);
         $number = $_POST["doi"];
        switch ($number) {
            case 0:
                echo 'Số không';
                break;
            case 1:
                echo 'Số một';
                break;
            case 2:
                echo 'Số hai';
                break;
            case 3:
                echo 'Số ba';
                break;
            case 4:
                echo 'Số bốn';
                break;
            case 5:
                echo 'số năm';
                break;
            case 6:
                echo 'số sáu';
                break;
            case 7:
                echo 'số bảy';
                break;
            case 230:
                echo 'hai trăm ba mươi';
                break;
            default:
                echo 'Còn lâu mới tìm thấy được';
                break;
        }
    }
        ?>
</body>
</html>