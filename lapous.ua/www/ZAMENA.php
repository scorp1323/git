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



//ДЛЯ ИНДЕКСАЦИИ СЕО!!! ПРИМЕР ХОРОШИХ ТЕГОВ
//  <h1>LED Телевизор SAMSUNG UE40J6330AU</h1>
// <title>Купить телевизор Samsung UE40J6330AU с бесплатной доставкой по Минску</title>



?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

	<meta name="Description" content="Лучшая ветеринарная клиника Березняки. Ветеринарная клиника Русановка.Ветеринарная клиника Лапоус. Все виды ветеринарных услуг. Выезд на дом. ">
	<title>Ветеринарная клиника "Лапоус". Березняки, Русановка.</title>
	<link rel='StyleSheet' type='text/css' href='css/style.css' />
</head>
<body>
	<!-- подключаем горизонтальное меню -->
	<? include_once "horisontell_meny.php" ?>

  <div class="wrapper">
  <div class="wrapper1">
      <div class="wr1_1">
           <h1>Ветеринарная клиника  "Лапоус"</h1>
      </div>  
  </div>


	<h2>Страница в разработке</h2>
    <br></br>
     <br></br>
      <br></br>
       <br></br>

	<footer>
    <!-- подключаем футер -->
	<? include_once "footer.php" ?>
    </footer>
</body>
</html>





