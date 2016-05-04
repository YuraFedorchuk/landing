<?php require_once('scripts/config.php'); $domain = $_SERVER['HTTP_HOST']; $uri = parse_url($_SERVER['HTTP_REFERER']); $r_domain = $uri['host']; if ( $domain != $r_domain ) { die(DENIED); } ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Успешная Заявка!</title>
        <link rel="shortcut icon" href="img/fayvideo.ico" type="image/x-icon">
    </head>
    <style media="screen">
        .wrapper {
            width: 780px;
            margin: 0 auto;
            text-align: center;
        }
        a {
            text-decoration: none;
                font-weight: bold;
            font-size: 24px;
        }
        a.return {
            color: blue;
        }
        a.return:hover {
            opacity: .5;
        }
        a.close {
            color: red;
        }
        a.close:hover {
            opacity: .5;
        }
    </style>
    <body>
        <div class="wrapper">
            <img src="img/joy.jpg" alt="успешная заявка" />
            <h1>Благодарим, Ваша заявка успешно обработана!</h1>
            <h2>Наши менеджеры свяжутся с Вами в ближайшее время. Бонус отправлен Вам на почту. Проверьте папку "Спам"!</h2>
            <a class="return" href="/">Вернуться на сайт</a><br>
        </div>
    </body>
</html>
