<?php
$to = "zakaz@kpw.com.ua";
$email = $_POST['email'];

$err ="";
if (trim ($_POST['name']) == "" && trim ($_POST['phone']) == "" && trim ($_POST['email']) == "" && trim ($_POST['message']) == "")
    $err = "Заполните все поля";
else if (trim ($_POST['name']) == "")
    $err = "Имя не указано";
else if (trim ($_POST['phone']) == "")
    $err = "Телефон не указан";
else if (!((strpos($email, ".") > 0) && (strpos($email, "@") > 0)))
    $err = "Неправильный e-mail";
else if (trim ($_POST['message']) == "")
    $err = "Введите сообщение";

if ($err != "") {
    echo $err;
    exit;
}

$msg = "Заказчик: <b>".$_POST['name']."</b>.<br>
<b>Телефон:</b>".$_POST['phone']."<br>
<b>Email:</b>".$_POST['email']."<br>
<b>Описание заказа:</b><br>".$_POST['message']."<br>
<br>Индивидуальный просчет с сайта";

$subject = "=?utf-8?B?".base64_encode("Индивидуальный просчет от $email")."?=";

$headers = "Form: $email\r\nReply-to: $email\r\nContent-type: text/html; charset=utf-8\r\n";

$success = mail ($to, $subject, $msg, $headers);
echo $success;

?>