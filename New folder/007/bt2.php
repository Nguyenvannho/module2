<?php 
function Validateaccount($str){
    $regexp = '/^[_a-z0-9]{6,}$/';
    if(preg_match($regexp, $str)){
        echo(' account hợp lệ');
    }else{
        echo('account không hợp lệ');
    }
}
Validateaccount('_abc123');
echo "<br/>";
Validateaccount('.@');


?>