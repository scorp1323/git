
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
 include_once "../implementer/MyFunctions.php";
 
?>
<!DOCTYPE html>
<html lang="en, ru">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
   <meta name="Description" content="Ветеринарные статьи. Статья об аллергии у животных. Причины, симптомы, лечение аллергии. Кормление при аллергии у собак и кошек. ">
  
  <title>Аллергия у животных. Статьи. Ветеринарная клиника "Лапоус"</title>
  <link rel='StyleSheet' type='text/css' href="../../css/style.css" />
</head>
<body>
<!-- подключаем горизонтальное меню -->
<? include_once "$root/horisontell_meny.php" ?>

<? include_once "$root/basa/proba.php" ?>















<div class="wrapper">
  <div class="wrapper1">
      <div class="wr1_1">
           <h1>Ветеринарная клиника  "Лапоус"</h1><br>
      </div>  
  </div>



<!-- ----------------------- -->

<div class="row1">
 

  <div class="Publication" style="background-color:#008080;">
  
<?php
GetURL($ollPublication);
?>

  </div>

   
     
     <div class="column3" style="background-color:#FFEFD5;">
     
     <a href="http://oscar-vet.kiev.ua/articles" title="<? print_r($ollPublication['0']['title']) ?>"><b>Все статьи:</b></a><br>

<?php
 Get_Oll_Publication($ollPublication, $www);
?>



Истории</div>
  </div>
 
</div>

<!-- -------------------------------------- -->


<footer>
  <!-- подключаем футер -->
<? include_once "$root/footer.php" ?>
</footer>

</body>
</html>