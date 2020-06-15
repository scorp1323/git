<?php

ini_set('error_reporting', E_ALL);

ini_set('display_errors', 1);

ini_set('display_startup_errors', 1);

// так отображаются все ошибки

//============================

header('Content-type: text/html; charset=utf-8');

#include_once "basa/connection_db.php";

include_once 'proba.php';





 //Подключаем файл всех составляющих в виде переменных

 include_once "../implementer/implementer.php"; 

 ?>

<!DOCTYPE>

<html>

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<title>Заголовок</title>

<link href="style.css" rel="stylesheet" type="text/css">

</head>

<body>



<div id="horizontelMenu">

	<!-- подключаем горизонтальное меню -->

<? include_once "$root/horisontell_meny.php" ?>

</div>



<div id="maket">

<div id="header"><h1>Ветеринарная клиника "Оскар"</h1></div>



<div id="right">

Правая колонка<br>

 Меню<br>

 Статьи:<br>



<a href="http://www.vertex-academy.com" title="<? print_r($ollPublication['0']['title']) ?>"><? print_r($ollPublication['0']['title']) ?></a><br>



<a href="http://www.vertex-academy.com" title="<? print_r($ollPublication['1']['title']) ?>"><? print_r($ollPublication['1']['title']) ?></a><br>



<?=$statti['0'] ?><br>

<?=$statti['1'] ?> <br>

<?=$statti['2'] ?> <br>

Истории</div>

<div id="content">

	 <div class="battCall">

    <!-- Включаем кнопку с вставленного файла -->

	<?= $battCall ?>

  </div>

	<?="$vetPomText"?></div>



</div>



<div id="footer"><? include_once "$root/footer.php" ?></div>

 </body>

</html>