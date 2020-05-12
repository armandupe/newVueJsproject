<?php

$firstName = htmlspecialchars($_POST['firstName']);
$lastName = htmlspecialchars($_POST['lastName']);
$email = htmlspecialchars($_POST['email']);
$subject = htmlspecialchars($_POST['subject']);
$message = htmlspecialchars($_POST['message']);

$firstNameUrlDecode = urldecode($firstName);
$lastNameUrlDecode = urldecode($firstName);
$emailUrlDecode = urldecode($firstName);
$subjectUrlDecode = urldecode($firstName);
$messageUrlDecode = urldecode($firstName);

if (mail("symbolic28@gmail.com", "Torve site feedback", "ФИО:".$firstNameUrlDecode, "From: example2@mail.ru \r\n"))
{
    echo "Сообщение успешно отправлено";
}
else
{
    echo "При отправке сообщения возникли ошибки";
}


?>