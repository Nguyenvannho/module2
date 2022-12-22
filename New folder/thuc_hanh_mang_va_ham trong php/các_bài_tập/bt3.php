<html>

<head>
    <title>[Bài tập] Ứng dụng Calculator</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>
    <div id="content">
        <h1>Simple Calculator</h1>
        <form method="post" action="">
            <div id="data">
                <label>First Operand:</label>
                <input type="text" name="first_operand" /><br />

                <label>Operator:</label>
                <select name="operator">
                    <option value="addition" selected>Addition</option>
                    <option value="subtraction">Substract</option>
                    <option value="multiple">Multiple</option>
                    <option value="division">Division</option>
                </select><br><br>

                <label>Second Operator:</label>
                <input type="text" name="second_operand" /><br />
            </div>
            <div id="buttons">
                <label>&nbsp;</label>
                <input type="submit" value="Calculate" />
            </div>
        </form>
    </div>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $first_Operand = $_POST["first_operand"];
        $select_Operator = $_POST["operator"];
        $second_Operand = $_POST["second_operand"];
        $result = 0;
        if ($select_Operator = "addition") {
            $result = $first_Operand + $second_Operand;
        } else if ($select_Operator = "subtraction") {
            $result = $first_Operand - $second_Operand;
        } else if ($select_Operator = "multiple") {
            $result = $first_Operand * $second_Operand;
        } else {
            if ($second_Operand == "0") {
                $result = "Error";
            } else {
                $result = $first_Operand / $second_Operand;
            }
        };
        echo "<h1 style='text-align:center;'>Result:" . $result . "</h1>";
    }
    ?>
</body>

</html>