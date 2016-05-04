<?php // require_once('scripts/config.php'); $domain = $_SERVER['HTTP_HOST']; $uri = parse_url($_SERVER['HTTP_REFERER']); $r_domain = $uri['host']; if ( $domain != $r_domain ) { die(DENIED); } ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Неуспешная заявка!</title>
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
            color: blue;
            font-size: 24px;
        }
        a.hover {
            opacity: .5;
        }
    </style>
    <body>
        <div class="wrapper">
            <img src="img/fail.jpg" alt="неуспешная заявка" />
            <h1>К сожалению заказ не оформлен!</h1>
            <h2 style="color: rgb(233, 24, 24)">Скорее всего Вы ввели не все данные.</h2>
            <h2>Повторите, пожалуйста, попытку<br> или напишите нам на эмайл info@fayvideo.com</h2>
            <a href="/">Вернуться на сайт</a><br>
        </div>
    </body>
</html>
