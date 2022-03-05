<?php
/* Здесь проверяется существование переменных */
if (isset($_POST['email'])) {$email = $_POST['email'];}

/* Сюда впишите свою эл. почту */
$address  = "fullstack2021@gmail.com"; // кому отправляем

/* А здесь прописывается текст сообщения, \n - перенос строки */
$mes = "Тема: Оформление подписки с сайта photographer.kaa.com.ua!\n
        Email: $email";

/* А эта функция как раз занимается отправкой письма на указанный вами email */
$sub='Subscriber from photographer.kaa.com.ua'; //сабж
$email='subscriber from photographer.kaa.com.ua'; // от кого
$send = mail ($address,$sub,$mes,"Content-type:text/plain; charset = utf-8\r\nFrom:$email");

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
                 border:10px solid black;
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
             src="assets/teacher-appreciation-5193205_1280.png" alt="">
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
                    Спасибо за подписку!
        </h1>
    </div>

</div>

</body>
</html>