<?php
    function compose_headers($email='imafos_t@ukr.net')
    {
        return "MIME-Version: 1.0"."\r\nContent-type: text/html; charset=utf-8"."\r\nFrom: FayVideo <info@fayvideo.com>"."\r\nReply-To: ".$email."\r\nX-Mailer: PHP/".phpversion();
    }

    function compose_message($name, $email, $phone)
    {
        return "Имя: ".$name."<br />Эмайл: ".$email."<br />Телефон: ".$phone;
    }

    function compose_act_message($name)
    {
        return "Поздравляем, ".$name.", Вы сделали правильный выбор!<br /><br />Ваш Бонус можете скачать по <a href=\"......\">этой ссылке</a> .<br /><br />Вскоре с Вами свяжется наш менеджер для уточнения Деталей и просчета стоимости Ролика. Ожидайте и хорошего дня :)<br /><br />С уважением, команда FayVideo!";
    }

    function f_clean($array) {
        return array_map('mysql_real_escape_string', $array);
    }
?>
