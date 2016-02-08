<?php
    require_once('config.php');
    require_once('functions.php');

    /*check to see if a form was submitted from the installed domain*/
    $domain     = $_SERVER['HTTP_HOST'];
    $uri        = parse_url($_SERVER['HTTP_REFERER']);
    $r_domain   = $uri['host'];

    if ( $domain == $r_domain ) {

        $name = $email = $phone = '';

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = secure_input($_POST["name"]);
            $email = secure_input($_POST["email"]);
            $phone = secure_input($_POST["phone"]);
        }

        $sent           = mail(MAIL_TO, SUBJECT, compose_message($name, $email, $phone), compose_headers($email));
        $action_sent    = mail($email, ACT_SUBJECT, compose_act_message($name), compose_headers($email));

        if ($sent && $action_sent) {
            echo SUCCESS;
        } else {
            echo FAIL;
        }

    } else {
        die(DENIED);
    }
?>
