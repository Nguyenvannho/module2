<?php 
// // cú pháp câu lệnh try-catch
// try {
//     // Các câu lệnh có thể ném ra ngoại lệ
// } catch (Kiểu_ngoại_lệ $biến_ngoại_lệ) {
//     // Các câu lệnh để xử lí ngoại lệ
// }

function checkemail($email){
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){ 
        throw new Exception(message:"Đúng email chưa mà nhập như đúng rồi vậy");
        return true;
    }
}
try {
    echo "Email đó không hợp lệ";
} catch (Exception $e) {
    echo $e ->getMessage();
}
checkemail('email:nho8372@gmail.com');
?>