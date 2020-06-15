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


  <title>Ветеринарная клиника "Лапоус", Анализы</title>
  <link rel='StyleSheet' type='text/css' href='css/style.css' />
                                                                                 
                   <link rel="stylesheet" href="/call_order/style.css" type="text/css" /> 

<linc rel="shotcut icon" href="favicon.ico" type="image/x-icon">
</head>
<body>
<!-- подключаем горизонтальное меню -->
<? include_once "horisontell_meny.php" ?>


<div class='analizes'>
	<br><br>
	<h3>В клинике "Лапоус" проводятся такие анализы:</h3>
 - общий анализ крови<br>
 - биохимический анализ крови<br>
 - анализы на гормоны<br>
 - анализы на инфекции ИХА, ИФА и ПЦР<br>
 - соскоб с уха на отодектоз<br>
 - цитология мазка с уха на кокки и дрозжевые грибы<br>
 

<br><br>
</div>


<footer>
  <!-- подключаем футер -->
<? include_once "footer.php" ?>
</footer>

   <!--Скрипт лучше разместить перед закрывающимся тегом body-->
<script async="true" src="https://widgets.vetmanager.cloud/js/appointment_widget_loadder.js"></script>

</body>
</html>