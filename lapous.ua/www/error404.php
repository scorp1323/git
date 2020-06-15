<?php

header('Content-Type: text/html; charset=utf-8');
// теперь можно писать на русском без кракозяблов
//======================================================
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
// так отображаются все ошибки
//=======================================================

// Подключаем файл всех составляющих в виде переменных
 include_once "implementer/implementer.php";
 include_once "basa/proba.php";
 include_once "implementer/MyFunctions.php";




?>
<!DOCTYPE html>
<html lang="en, ru">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">


  <title>Ветеринарная клиника "Лапоус", страница 404</title>
  <link rel='StyleSheet' type='text/css' href='../css/style.css' />
  <link rel='StyleSheet' type='text/css' href='../css/ssory.css' />

  <linc rel="shotcut icon" href="favicon.ico" type="image/x-icon">
</head>
<body>
<!-- подключаем горизонтальное меню -->
<? include_once "horisontell_meny.php" ?>




<br>
<div class='container'>
	<img width='200px' src='../img/sorry_cat.svg' alt='расстроеный котик'>
</div>
<div class='ssory'>
<h1>У-упс.., страница не найдена.. </h1>
</div>
<br>
<div class='ssory'>
<h1>Предлагаем вернуться на главную страницу или записаться на прием</h1>
</div>

<div class='returnIndex'>
<a class="buttons" href='http://lapous.com.ua/' >На главную</a>
<style type="text/css">
  a.buttons {
  width: 150px;
  height: 30px;
  text-decoration: none;
  padding-top: 9px;
  color: #a675b3;
  text-align: center;
  line-height: 20px;
  display: block;
  margin: 20px auto;
  font: normal 17px arial;

  border-radius: 7px;
}

a.buttons:not(.active) {
  box-shadow: inset 0 1px 1px rgba(111, 55, 125, 0.8), inset 0 -1px 0px rgba(63, 59, 113, 0.2), 0 9px 16px 0 rgba(0, 0, 0, 0.3), 0 4px 3px 0 rgba(0, 0, 0, 0.3), 0 0 0 1px #150a1e;
  background-image: linear-gradient(#3b2751, #271739);
  text-shadow: 0 0 21px rgba(223, 206, 228, 0.5), 0 -1px 0 #311d47;
}

a.buttons:not(.active):hover,
a.buttons:not(.active):focus {
  transition: color 200ms linear, text-shadow 500ms linear;
  color: #fff;
  text-shadow: 0 0 21px rgba(223, 206, 228, 0.5), 0 0 10px rgba(223, 206, 228, 0.4), 0 0 2px #2a153c;
}
a.buttons:not(:hover) {
    transition: 0.6s;
}
</style>
</div>



<div class='online'>
<a href="#" class="vetmanager-run-widget" data-url="https://widgets.vetmanager.cloud/frame/282">Онлайн-запись на прием</a>
</div>
<br><br><br><br>


<footer>
  <!-- подключаем футер -->
<? include_once "footer.php" ?>
</footer>



   <!--Скрипт лучше разместить перед закрывающимся тегом body-->
<script async="true" src="https://widgets.vetmanager.cloud/js/appointment_widget_loadder.js"></script>

</body>
</html>
