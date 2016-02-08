<?php
  $name  = htmlspecialchars($_POST["name"]);
  $email  = htmlspecialchars($_POST["email"]);
  $phone  = htmlspecialchars($_POST["phone"]);

  $to = "imafos_t@ukr.net";
  $subject = "Новый Заказ!";
  $message = "Имя: ".$name."<br />Эмайл: ".$email."<br />Телефон: ".$phone;
  $headers = "MIME-Version: 1.0"."\r\n".
             "Content-type: text/html; charset=utf-8"."\r\n".
             "From: FayVideo <info@fayvideo.com>"."\r\n" .
             "Reply-To: ".$email."\r\n".
             "X-Mailer: PHP/".phpversion();

  $act_subject = "Заказ Оформлен!";
  $act_message = "Поздравляем, ".$name.", Вы сделали правильный выбор!<br /><br />Ваш Бонус можете скачать по <a href=\"https://goo.gl/fQRCu4\">этой ссылке</a> .<br /><br />Вскоре с Вами свяжется наш менеджер для уточнения Деталей и просчета стоимости Ролика. Ожидайте и хорошего дня :)<br /><br />С уважением, команда FayVideo!";

  $sent = mail($to, $subject, $message, $headers);
  $action_sent = mail($email, $act_subject, $act_message, $headers);

   if ($sent && $action_sent) {
     echo "Заказ успешно оформлен!\n".$name.", с Вами свяжутся в ближайшее время.\nБонус отправлен Вам на почту. Проверьте папку 'Спам'!";
   } else {
     echo $name.", к сожалению заказ не оформлен!\nПовторите, пожалуйста, попытку.";
   }


?>
