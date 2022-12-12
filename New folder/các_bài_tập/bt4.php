<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table td {
            width: 15px;
            height: 15px;
        }
    </style>
</head>

<body>
    <form method='post'>
        <input type='text' name='width' placeholder='width' /><br />
        <input type='text' name='height' placeholder='height' /><br />
        <input type="radio" name="shape" value="rectangle" checked />Rectangle<br />
        <input type="radio" name="shape" value="triangle" />Triangle<br />
        <select name='rectangular'>
            <option value="top-left">top-left</option>
            <option value="top-right">top-right</option>
            <option value="bottom-right">bottom-right</option>
            <option value="bottom-left">bottom-left</option>
        </select><br />
        <input type='submit' value='Draw' />
    </form>
    <?php
    function drawRectangle($width, $height)
    {
        $text = "";
        for ($row = 0; $row < $height; $row++) {
            $text .= "<tr>";
            for ($col = 0; $col < $width; $col++) {
                $text .= "<td>*</td>";
            };
            $text .= "</tr>";
        }
        return $text;
    }
    function drawTriangle($width, $height, $rectangular)
    {
        $text = "";

        switch ($rectangular) {
            case 'bottom-left';
                $i = 1;
                for ($row = 0; $row < $height; $row++) {
                    $text .= "<tr>";
                    for ($col = 0; $col < $i; $col++) {
                        $text .= "<td>*</td>";
                    };
                    $text .= "</tr>";
                    $i++;
                };
                break;
            case 'top-left':
                $i = $width;
                for ($row = 0; $row < $height; $row++) {
                    $text .= "<tr>";
                    for ($col = 0; $col < $i; $col++) {
                        $text .= "<td>*</td>";
                    };
                    $text .= "</tr>";
                    $i--;
                };
                break;
            case 'top-right':
                $i = 0;
                for ($row = 0; $row < $height; $row++) {
                    $text .= "<tr>";
                    for ($col = 0; $col < $i; $col++) {
                        if ($col >= $i) {
                            $text .= "<td>*</td>";
                        } else {
                            $text .= "<td></td>";
                        }
                    };
                    $text .= "</tr>";
                    $i++;
                };
                break;
            case 'bottom-right':
                $i = $width;
                for ($row = 0; $row < $height; $row++) {
                    $text .= "<tr>";
                    for ($col = 0; $col < $i; $col++) {
                        if ($col >= $i) {
                            $text .= "<td>*</td>";
                        } else {
                            $text .= "<td></td>";
                        }
                    };
                    $text .= "</tr>";
                    $i--;
                };
                break;
            default:
        };

        return $text;
    }
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $width = $_POST['width'];
        $height = $_POST['height'];
        $rectangular = $_POST['rectangular'];
        $shape = $_POST['shape'];
        $patternInteger = "/^[1-9]{1}\d*$/";
        try {
            if (!preg_match($patternInteger, $width) || !preg_match($patternInteger, $height)) {
                throw new Exception('nhập width height không phải là số nguyên');
            }
            $text = "<table>";
            switch ($shape) {
                case 'rectangle':
                    $text .= drawRectangle($width, $height);
                    break;
                case 'triangle':
                    $text .= drawTriangle($width, $height, $rectangular);
                    break;
            };
            $text .= '</table>';

            echo $text;
        } catch (Exception $e) {
            echo "<br/>Lỗi: " . $e->getMessage();
        }
    }
    ?>
</body>

</html>