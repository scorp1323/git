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
 include_once "../implementer/implementer.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="Description" content="Позитивчик. Фото смешные животные. Веселые животные. Поднятие настроения. Улыбнись. ">

  <title>Смешные веселые фото с участием животных. Ветеринарная клиника "Лапоус"</title>
  <link rel='StyleSheet' type='text/css' href='../css/style.css' />
</head>
<body>
<!-- подключаем горизонтальное меню -->
<? include_once "$root/horisontell_meny.php" ?>

<div class="wrapper">
  <div class="wrapper1">
      <div class="wr1_1">
           <h1>Ветеринарная клиника  "Лапоус"</h1>
      </div>  
  </div>

<div id="fotos">
	<img src="../img/fanny_img/arbuz.jpg" width="211" height="239"  alt="Сьем весь арбуз" title="Сьем весь арбуз"> 

	<img src="../img/fanny_img/hipopo.jpg" width="422" height="239"  alt="Веселый гипопотамчик" title="Веселый гипопотамчик"> <br>

	<img src="../img/fanny_img/lama.jpg" width="350" height="379" alt="Зубастик-лама" title="Зубастик-лама"/> 

	<img src="../img/fanny_img/wwott.jpg" width="480" height="379" alt="Подушка" title="Подушка"/><br>

	<img src="../img/fanny_img/papa_at_houm.jpg" width="700" height="700" alt="Папа домой вернулся" title="Папа домой вернулся"><br>

	<img src="../img/fanny_img/spluja.jpg"  title="Все мое" alt="Все мое">

	<img src="../img/fanny_img/ulibka.jpg"  title="Улыбка" alt="Улыбка">
</div>


<footer>
  <!-- подключаем футер -->
<? include_once "$root/footer.php" ?>
</footer>

</body>
</html>