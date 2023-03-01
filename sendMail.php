<?php
    print_r($_POST);
    $email = $_POST['email'];
    $message = $_POST['letter'];

    $error = null;

    // if(trim($email) == '')
    // {
    //     if(trim($letter) == '')
    //     {
    //         $error = "Введите Ваш Email"."<br>".'Введите сообщение';
    //     }
    //     else $error = "Введите Ваш Email"."<br>";
    // }
    // else if(trim($message) == '')
    //     $error = 'Введите сообщение';
    // else if(strlen($message) < 2)
    //     $error = 'Сообщение введите нормально';

    if($error != '') 
    {
        echo $error;
        exit;
    }
    
    $subject = "=?utf-8?B?".base64_encode("Сообщение с сайта")."?=";
    $message = "=?utf-8?B?".base64_encode($message)."?=";
    $headers = "From: $email\r\nReply-to: $email\r\nContent-type: text/html;charset=utf-8\r\n";

    mail('SVSubbotin88@mail.ru', $subject, $message, $headers);

    header('Location: /mail.php');
?>