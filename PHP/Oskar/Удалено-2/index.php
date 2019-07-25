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

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <link rel='StyleSheet' type='text/css' href='css/style.css' />
</head>
<body>
<!-- подключаем горизонтальное меню -->
<? include_once "horisontell_meny.php" ?>


<div class="wrapper">
  <div class="wrapper1">
      <div class="wr1_1">
           <h1>Ветеринарная клиника  "Оскар"</h1>
      </div>
   
  </div>

  <div class="wrapper2">
    <!-- Включаем кнопку с вставленного файла -->
    <?= $battCall ?>
  </div>

  <div class="wrapper3">
    <!-- Включаем текст основной -->
    <?= $vetPomText ?>
  </div>
  <div class="wrapper4">4</div>
  <div class="wrapper5">5</div>
  <div class="wrapper6">6</div>
  <div class="wrapper7">7</div>
</div>



<footer>
  <!-- подключаем футер -->
  <? include_once "footer.php" ?>
</footer>



  
</body>
</html>

<?php








// $root = $_SERVER['DOCUMENT_ROOT'];
// $root_true = '/home/s1323/';

// echo '<br>';
// $a =  str_replace($root_true, '', $root);
// echo $a;




// preg_replace ( mixed $pattern , mixed $replacement ,  $subject [, int $limit = -1 [, int &$count ]] ) : mixed
// Выполняет поиск совпадений в строке subject с шаблоном pattern и заменяет их на replacement.





// echo '<br>';
//  echo $_SERVER['DOCUMENT_ROOT'];
// // echo '<br>';
// // echo  __DIR__;