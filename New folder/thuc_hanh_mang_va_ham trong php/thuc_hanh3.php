<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <style>
            table {
                border-collapse: collapse;
                width: 100%;
            }

            th, td {
                padding: 8px;
                text-align: left;
                border-bottom: 1px solid #ddd;
            }
            .thumbnail{
                height: 60px;
                width: 100px;
                overflow: hidden;
            }
            .thumbnail img{
                width:100%;
            }
        </style>
    </head>
    <body>
        <table border="0">
          <caption><h2>Danh sách khách hàng Gia nhập các clb bóng đá </h2></caption>
          <tr>
            <th>STT</th>
            <th>Tên</th>
            <th>Ngày sinh</th>
            <th>Địa chỉ</th>
            <th>Ảnh</th>
          </tr>
          <?php
          $customerlist = array(
                "1" => array("ten" => "Andreas Christensen", "ngaysinh" => "1996-04-10", "diachi" => "Đan Mạch", "anh" => "https://media.bongda.com.vn/files/thach.pham/2022/02/27/1-1231-0917.jpg"),
                "2" =>array("ten" => "Marcus Rashford", "ngaysinh" => "1997-10-31", "diachi" => "Vương Quốc Anh", "anh" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRMqXBE0EwG3fWYslNak94bL5copRfRcln9uqx4WwNKLBf_5CW8rUyO8ydOheNeAJlGtjc&usqp=CAU"),
                "3" =>array("ten" => "Rodrigo De Paul", "ngaysinh" => "1994-05-24", "diachi" => "Aghentina", "anh" => "https://i.ex-cdn.com/nongnghiep.vn/files/huynk/2021/07/13/rodrigo-de-paul-080723_508.jpg"),
                "4" =>array("ten" => "Christian Pulisic", "ngaysinh" => "1998-09-18", "diachi" => "Hoa Kỳ", "anh" => "http://res.cloudinary.com/chelsea-production/image/upload/c_fit,h_630,w_1200/v1/editorial/people/first-team/2022-23/Pulisic_profile_avatar_final_22-23"),
                "5" =>array("ten" => "Bruno Fernandes", "ngaysinh" => "1994-09-08", "diachi" => "Bồ Đào Nha", "anh" => "https://vcdn1-vnexpress.vnecdn.net/2021/08/23/bruno-fernandes-1264-1629714265.jpg?w=0&h=0&q=100&dpr=1&fit=crop&s=1JLfrCVH1CxXKd1D_Avhgw ")
                
          );
          foreach($customerlist as $key => $values){
              echo "<tr>";
              echo "<td>".$key."</td>";
              echo "<td>".$values['ten']."</td>";
              echo "<td>".$values['ngaysinh']."</td>";
              echo "<td>".$values['diachi']."</td>";
              echo "<td><div class='thumbnail'><image src = '".$values['anh']."'/></div></td>";
              echo "</tr>";
          }
          ?>
        </table>
    </body>
</html>