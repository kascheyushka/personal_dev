<?php
/* Здесь проверяется существование переменных */
if (isset($_POST['yourName'])) {$yourName = $_POST['yourName'];}
if (isset($_POST['email'])) {$email = $_POST['email'];}
if (isset($_POST['comments'])) {$comments = $_POST['comments'];}

/* Сюда впишите свою эл. почту */
$myaddres  = "fullstack2021@gmail.com"; // кому отправляем

/* А здесь прописывается текст сообщения, \n - перенос строки */
$mes = "Тема: Обращение с сайта wedding.kaa.com.ua!\n
        Имя: $yourName\n
        Email: $email\n
        Комментарии: $comments";

/* А эта функция как раз занимается отправкой письма на указанный вами email */
$sub='Order from wedding.kaa.com.ua'; //сабж
$email='Form from site wedding.kaa.com.ua'; // от кого
$send = mail ($myaddres,$sub,$mes,"Content-type:text/plain; charset = UTF-8\r\nFrom:$email");

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
<title>Спасибо, что известили нас!</title>
<meta name="generator">
<script type="text/javascript">
setTimeout('location.replace("/index.html")', 5000);
/*Изменить текущий адрес страницы через 5 секунды (5000 миллисекунд)*/
</script>
</head>
<body style="display:flex;
                flex-direction:column;
                justify-content:center;
                align-items:center;
                width:100%;
                height:100%;
                background-color:whitesmoke;
                font-family: 'Marck Script', cursive;
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
                width:60%;
                height:auto;">
        <img style="width:100%;
                height:auto;
                display:flex;
                justify-content:center;
                align-items:center;"
             src="assets/thx-2.png" alt="">
    </div>



</div>

</body>
</html>