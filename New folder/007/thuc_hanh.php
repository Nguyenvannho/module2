<?php 
// function isFirstLetterUpperCase($str){
//     $regexp = '/^[A-Z]/';
//     if(preg_match($regexp, $str)) {
//         echo("String's first character is uppercase");
//     }else{
//         echo("String's first character is not uppercase");
//     }
// }
// isFirstLetterUpperCase('Codegym');
// echo "<br>";
// isFirstLetterUpperCase('cdegym');
$subject = "CodeGym@gmail.com";
$pattern = '/^\w+@\w+(\.\w+){1,3}$/';
if (preg_match($pattern, $subject, $matches)) {
    echo 'Khớp';
} else {
    echo 'Không khớp';
};

?>