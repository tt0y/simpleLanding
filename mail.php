<?php

$name = htmlspecialchars($_POST['name']);   // Получаем имя отправителя
$email = htmlspecialchars($_POST['email']); // Получаем электронную почту отправителя

$subject = 'Вам отправили сообщение с сайта ' . $_SERVER['SERVER_NAME']; // Тема сообщения
$message = 'Вашим сайтом заинтересовался ' . $name . ' ('.$email.')';

$addressToSend = 'tt0y@mail.ru';

if (isset($name) && isset($name)){
    if (mail($addressToSend, $subject, $message)){
        echo "Ваше сообщение успешно отправлено";
    };
}

?>