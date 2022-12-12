<?php
    $customerList = [
        "1" => [
            "name" => "eriksen",
            "day_of_birth" => "1983/08/20",
            "address" => "Đan M",
            "profile" => "https://photo-cms-tpo.epicdn.me/460x258/Uploaded/2022/neg-olyrlys/2022_01_31/christian-eriksen-5259.jfif"
        ],
        "2" => [
            "name" => "Lukaku",
            "day_of_birth" => "1983/08/21",
            "address" => "Vương quốc Bỉ",
            "profile" => "https://vcdn1-thethao.vnecdn.net/2022/08/11/01g65pycxasfyy3pqa55-166018425-7273-9947-1660184392.jpg?w=680&h=0&q=100&dpr=1&fit=crop&s=V_ua3lhexf_30MBhisUmnw"
        ],
        "3" => [
            "name" => "Hakim zyech",
            "day_of_birth" => "1983/08/22",
            "address" => "Ma Rốc",
            "profile" => "https://vnn-imgs-f.vgcloud.vn/2021/06/06/17/chelsea-bat-ngo-ban-thao-hakim-ziyech.jpg"
        ],
        "4" => [
            "name" => "Noussair Mazraoui",
            "day_of_birth" => "1983/08/17",
            "address" => "Ma rốc",
            "profile" => "https://a.espncdn.com/combiner/i?img=/i/headshots/soccer/players/full/239350.png"
        ],
        "5" => [
            "name" => "Livaković",
            "day_of_birth" => "1983/08/19",
            "address" => "Croatia",
            "profile" => "https://library.sportingnews.com/styles/twitter_card_120x120/s3/2022-12/dominik-livakovic-croatia-world-cup.jpg?itok=1vP5CM4L"
        ]
    ];
    function searchByDate($customers, $fromDate, $toDate)
    {
        if (empty($fromDate) || empty($toDate)) {
            return $customers;
        }
        $filteredCustomers = [];
        foreach ($customers as $customer) {
            if (strtotime($customer['day_of_birth']) < strtotime($fromDate)){
                continue;

            }
            if (strtotime($customer['day_of_birth']) > strtotime($toDate)){
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
    <form method="get">
        Chọn ngày sinh từ: <input id="from" type="date" name="from" placeholder="yyyy/mm/dd" value="" />
        đến: <input id="to" type="date" name="to" placeholder="yyyy/mm/dd" value="" />
        <input type="submit" id="submit" value="Lọc" />
        <table border="0">
    <caption><h2>Danh sách khách hàng</h2></caption>
    <tr>
        <th>STT</th>
        <th>Tên</th>
        <th>Ngày sinh</th>
        <th>Địa chỉ</th>
        <th>Ảnh</th>
    </tr>
    <?php foreach ($filteredCustomers as $index => $customer): ?>
        <tr>
            <td><?php echo $index ; ?></td>
            <td><?php echo $customer['name']; ?></td>
            <td><?php echo $customer['day_of_birth']; ?></td>
            <td><?php echo $customer['address']; ?></td>
            <td>
                <div class="profile"><img src="<?php echo $customer['profile']; ?>"/></div>
            </td>
        </tr>
    <?php endforeach; ?>
</table>

    </form>
    </body>

</html>
  