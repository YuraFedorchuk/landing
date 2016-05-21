<?php // require_once('scripts/config.php'); $domain = $_SERVER['HTTP_HOST']; $uri = parse_url($_SERVER['HTTP_REFERER']); $r_domain = $uri['host']; if ( $domain != $r_domain ) { die(DENIED); } ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Неуспешная заявка!</title>
        <link rel="shortcut icon" href="img/fayvideo.ico" type="image/x-icon">
        <!-- Yandex.Metrika counter -->
        <script type="text/javascript"> (function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter33887809 = new Ya.Metrika({ id:33887809, clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true }); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = "https://mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks");</script><noscript><div><img src="https://mc.yandex.ru/watch/33887809" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
        <!-- /Yandex.Metrika counter -->
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
            <h2>Повторите, пожалуйста, попытку<br> или напишите нам на эмайл info@fayvideo.com</h2>
            <a href="/">Вернуться на сайт</a><br>
        </div>
    </body>
</html>
