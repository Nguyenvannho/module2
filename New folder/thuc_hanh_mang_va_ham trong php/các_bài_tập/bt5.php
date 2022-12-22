
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="post">        
        <input type="text" name="input"/>
        <select name='mode'>
            <option value='USD'>VND to USD</option>
            <option value='VND'>USD to VND</option>
        </select>

        <input type='submit' value='Exchange'/>
    </form>

    <?php 
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $input = $_POST['input'];
            $mode = $_POST['mode'];
            $pattern = "/^[1-9]{1}[0-9]+$/";
            try {
                if (!preg_match($pattern, $input)) {
                    throw new Exception('nhập đầu vào');
                };
                switch ($mode) {
                    case 'USD':
                        $output = $input / 23000;
                        break;
                    case 'VND':
                        $output = $input * 23000;
                        break;
                }

                echo "<br/>Quy đổi sang $mode: $output";
            } catch (Exception $e) {
                echo "<br/>Lỗi: ".$e->getMessage();
            }
        }
    ?>
</body>
</html>