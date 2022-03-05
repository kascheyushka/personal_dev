<?php
/* Здесь проверяется существование переменных */
if (isset($_POST['yourName'])) {$yourName = $_POST['yourName'];}
if (isset($_POST['phone'])) {$phone = $_POST['phone'];}
if (isset($_POST['email'])) {$email = $_POST['email'];}
if (isset($_POST['site'])) {$site = $_POST['site'];}
if (isset($_POST['competitor'])) {$competitor = $_POST['competitor'];}
if (isset($_POST['type'])) {$type = $_POST['type'];}
if (isset($_POST['corp'])) {$corp = $_POST['corp'];}
if (isset($_POST['budget'])) {$budget = $_POST['budget'];}
if (isset($_POST['example'])) {$example = $_POST['example'];}
if (isset($_POST['comments'])) {$comments = $_POST['comments'];}

/* Сюда впишите свою эл. почту */
$myaddres  = "fullstack2021@gmail.com"; // кому отправляем

/* А здесь прописывается текст сообщения, \n - перенос строки */
$mes = "Тема: Обращение с сайта Freelancer.kaa.com.ua!\n
        Имя: $yourName\n
        Телефон: $phone\n
        Email: $email\n
        Сайт заказчика: $site\n
        Конкуренты заказчика: $competitor\n
        Тип сайта: $type\n
        Корпаративный стиль: $corp\n
        Бюджет: $budget\n
        Пример желаемых сайтов: $example\n
        Комментарии: $comments";

/* А эта функция как раз занимается отправкой письма на указанный вами email */
$sub='Order from freelancer.kaa.com.ua'; //сабж
$email='order from my web site'; // от кого
$send = mail ($myaddres,$sub,$mes,"Content-type:text/plain; charset = utf-8\r\nFrom:$email");

ini_set('short_open_tag', 'On');
header('Refresh: 3; URL=index.html');
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html style="display:flex;
            flex-direction:column;
            justify-content:center;
            align-items:center;
            width:100%;
            height:100%;">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="refresh" content="3; url=index.html">
<title>Спасибо! Мы скоро свяжемся с вами!</title>
<meta name="generator">
<script type="text/javascript">
setTimeout('location.replace("/index.html")', 4000);
/*Изменить текущий адрес страницы через 3 секунды (3000 миллисекунд)*/
</script>
</head>
<body style="display:flex;
                flex-direction:column;
                justify-content:center;
                align-items:center;
                width:100%;
                height:100%;
                background-color:whitesmoke;
                margin:0;
                padding:0;">

<div style="display:flex;
                 flex-direction:column;
                 justify-content:space-around;
                 align-items:center;
                 width:90%; height:100%;
                 background-color:white;
                 border:10px solid #B7C5FD;
                 border-radius: 6px;
                 text-align:center;
                 flex-wrap:wrap;
                 box-sizing:border-box;
                 padding: 10px;
                 margin: 16px;">

    <div style="display:flex;
                justify-content:center;
                align-items:center;
                width:40%;
                height:auto;">
        <img style="width:100%;
                height:auto;
                display:flex;
                justify-content:center;
                align-items:center;"
             src="assets/thank_you_img.svg" alt="">
    </div>

    <div style="display:flex;
                flex-direction:column;
                justify-content:center;
                align-items:center;
                width:100%">
        <h1 style="display:flex;
                    flex-wrap:wrap;
                    justify-content:center;
                    align-items:center;
                    font-size:5vh;
                    color:grey;
                    text-align:center;
                    margin-bottom:10px;">
                    Спасибо за Ваше обращение! Мы скоро свяжемся с вами!
        </h1>
    </div>

</div>

</body>
</html>