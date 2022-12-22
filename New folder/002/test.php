<?php  
$customerList = [
    "1" => [
        'mua hang' => '100.000đ',
        'ngay mua hang' => '2022-01-29'
    ],
    "2" => [
        'mua hang' => '300.000đ',
        'ngay mua hang' => ' 2022-02-02'
    ],
    "3" => [
        'thanh toan' => '200.000đ',
        'ngay thanh toan' => '2022-02-07'
    ],
    "4" => [
        'mua hang' => '250.000đ',
        'ngay mua hang' => '2022-02-10'
    ],
    "5" => [
        'thanh toan' => '400.000đ',
        'ngay thanh toan' => '2022-02-15'
    ],
];
function searchByDate($customers, $fromDate, $toDate)
{
    if (empty($fromDate) || empty($toDate)) {
        return $customers;
    }
    $filteredCustomers = [];
    foreach ($customers as $customer) {
        if (strtotime($customer['ngay thanh toan']) < strtotime($fromDate)){
            continue;

        }
        if (strtotime($customer['ngay thanh toan']) > strtotime($toDate)){
            continue;

        }
        $filteredCustomers[] = $customer;
    }
    return $filteredCustomers;

}
$fromDate = null;
$toDate = null;
if ($_SERVER['REQUEST_METHOD'] == 'get') {
    $fromDate = $_REQUEST['from'];
    $toDate = $_REQUEST['to'];
    
}
$filteredCustomers = searchByDate($customerList, $fromDate, $toDate);
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
    <form action="" method="get">
      chọn ngày mua hàng:<input id="from" type="date" name ="from" placeholder="yyyy/mm/dd" value=""/>
      đến: <input id="to" type="date" name="to" placeholder="yyyy/mm/dd" value=""/>
      <input type="submit" id="submit" value="Lọc"/>
    </form>   