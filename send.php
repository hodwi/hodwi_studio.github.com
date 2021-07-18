<?php

  $email = $_POST['email'];

  $error = '';
  if(trim($email) == '')
    $error = 'Введите ваш email';

  if($error !='') {
    echo $error;
    exit;
  }

  $subject = "=?utf-8?b?".base64_encode("Тестовое сообщение")."?=";
  $headers = "From: $email\r\nReply-to: $email\r\nContent-type: text/html;charset=utf-8\r\n";

  mail('playdessver@mail.ru', $subject, $message, $headers);

  header('Location: /home');
?>
