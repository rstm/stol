<?php

if (isset($_POST['first_name']))
{
    $to= 'm.rustem18@gmail.com, d.x.r@mail.ru';
    $subject = 'Онлайн-заказ - столешницы-казань.рф';
    

    $from_user='столешницы-казань.рф';
    $from_email='info@столешницы-казань.рф';
    $from = "=?UTF-8?B?".base64_encode($from_user)."?= <" . $from_email . ">";
    //тема русским щрифтом
    $subject = "=?UTF-8?B?".base64_encode($subject)."?=";
    //формируем правильный заголовок в соответствии со стандартом
    $headers = "From: $from \r\n". 
            "Reply-To: $from \r\n". 
            "MIME-Version: 1.0" . "\r\n" . 
            "Content-type: text/html; charset=UTF-8" . "\r\n"; 
    $message = "
        <html>                      
            <p>Имя: {$_POST['first_name']}</p>
            <p>Номер телефона: {$_POST['phone_number']}</p>
        </html> 
    ";
        
    if(!mail($to, $subject, $message, $headers)) 
    {
        echo 'error';
    }  
    else 
    { 
        echo 'ok';
    }  
} else {
    echo 'error';
}
?>