<?php  
function validateEMAIL($EMAIL){
    $regexp = '/^[A-Za-z0-9]+[A-Za-z0-9]*@[A-Za-z0-9]+(\.[A-Za-z0-9]+)$/';
    if(preg_match($regexp, $EMAIL)){
        echo 'EMAIL ĐÚNG RỒI';
       
    }else{
        echo 'Email Sai';
    
    }
}
validateEMAIL('anhbanh@gmail.com');
echo"<br/>";
validateEMAIL("@#ancomchua@gmail.com");

?>