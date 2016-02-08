<?php
    require_once('config.php');
    require_once('functions.php');

    /*check to see if a form was submitted from the installed domain*/
    $domain     = $_SERVER['HTTP_HOST'];
    $uri        = parse_url($_SERVER['HTTP_REFERER']);
    $r_domain   = $uri['host'];

    if ( $domain == $r_domain ) {

        $_POST = f_clean($_POST);

        $name   = $_POST["name"];
        $email  = $_POST["email"];
        $phone  = $_POST["phone"];

        $sent           = mail(MAIL_TO, SUBJECT, compose_message($name, $email, $phone), compose_headers($email));
        $action_sent    = mail($email, ACT_SUBJECT, compose_act_message($name), compose_headers($email));

        if ($sent && $action_sent) {
            echo "Заказ успешно оформлен!\n".$name.", с Вами свяжутся в ближайшее время.\nБонус отправлен Вам на почту. Проверьте папку 'Спам'!";
        } else {
            echo $name.", к сожалению заказ не оформлен!\nПовторите, пожалуйста, попытку.";
        }

    } else {
        die('Вам запрещено отправлять форму отсюда!');
    }

?>
