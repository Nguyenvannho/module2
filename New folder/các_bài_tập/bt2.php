<!DOCTYPE html>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<head>
</head>

<body>
    <h1>Future Value Calculator</h1>
    <form action="" method="POST">
        <div id="data">
            <label>Investment Amount:</label>
            <input type="text" name="investment" value=""> <br />
            <label>Yearly Interest Rate:</label>
            <input type="text" name="rate" value=""> <br />
            <label>Number of Years:</label>
            <input type="text" name="years" value=""> <br />
        </div>
        <div id="button">
            <input type="submit" value="Calculate"> <br />
        </div>
    </form>
</body>

</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $investment = $_POST["investment"];
    $rate = $_POST["rate"] / 100;
    $years = $_POST["years"];
    $ket_qua = $investment;
    for ($i = 0; $i < $years; $i++) {
        $ket_qua += $investment * $rate;
    }
    echo "<div id='content'>
                <form>
                <h1>Kết quả được thực thi khi bạn đã chuyển đổi!!!</h1>
                    <div id='data'>
                        <p>Số tiền bạn đầu tư:$" . $investment . " </p>
                        <p>Lãi suất hàng năm: " . $rate . "%</p>
                        <p>Số năm:" . $years . "</p>                     
                        <p>Kết quả: $" . $ket_qua . "</p>
                    </div>
                </form>            
            </div>";
}
?>