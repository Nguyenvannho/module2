<?php   
function ten_cua_lop_hoc($str){
    $regexp = '/^[CAP][0-9]{4,4}[GHIKLM]$/';
    if(preg_match($regexp, $str)){
        echo ('Hợp lệ');
    }else{
        echo ('Không Hợp lệ');
    }
}
ten_cua_lop_hoc('C0318G');
echo "</br>";
ten_cua_lop_hoc('P0323A');
?>