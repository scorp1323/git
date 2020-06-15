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
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1">

<meta name="Description" content="Ветеринарная клиника Березняки. Ветеринарная клиника Лапоус. Скорая ветеринарная помощь. Стационар. УЗИ. Хирургия. Прививки. Вызов на дом.">                

                 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js">
                 </script>
                 <script src="/call_order/callback.js"></script>

                                                         
  <title>Ветеринарная клиника "Лапоус" - главная страница</title>
  <link rel='StyleSheet' type='text/css' href='css/style.css' />
  <link rel="stylesheet" href="/call_order/style.css" type="text/css" />        
<!--   <link rel="stylesheet" href="../css/HM1.css" type="text/css" /> -->
  
  <linc rel="shotcut icon" href="favicon.ico" type="image/x-icon">
</head>
<body>
<!-- подключаем горизонтальное меню -->
<? include_once "horisontell_meny.php" ?>

<? //include_once "HM.php" ?> 



<div class="wrapper">
  <div class="wrapper1">
      <div class="wr1_1">
           <h1>Ветеринарная клиника  "Лапоус"</h1><br>
           
      </div>  
  </div>



<!-- ----------------------- -->

             <div class="row1">
              <div class="column1" style="backSkyBlue;">
      


<!--Разместите эту ссылку в любом месте сайта-->
<a href="#" class="vetmanager-run-widget" data-url="https://widgets.vetmanager.cloud/frame/282">Онлайн-запись на прием</a>
<br><br><br><br>
                                       

                 <p id="callback">Заказать обратный звонок</p>

                <div id="callback_form">
		
	                     	Имя: <input id="name">
	                         	Телефон: <input id="phone">
	                       <p id="send">Заказать</p>
	                       <p id="close">Скрыть форму</p>
	
                    	</div>
      
      
      
      
      
                                                                                                 
                    	                                                                
      <//?= $battCall ?>
  </div>

  <div class="column2">
           
          
           <div class="maps">
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10167.06717201728!2d30.6010712!3d50.4268165!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x1137b10ff2385cf6!2z0JLQtdGC0LXRgNC40L3QsNGA0L3QsNGPINC60LvQuNC90LjQutCwICLQm9CQ0J_QntCj0KEi!5e0!3m2!1sru!2sua!4v1583920988560!5m2!1sru!2sua" width="100%" height="600рх" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</div>
<br><br>
    <!-- Включаем текст основной -->
    <?= $vetPomText ?>
  </div>

  <div class="column3" style="background-color:#FFEFD5;">
    <h2>Все статьи: </h2>



<?php 
 Get_Oll_Publication($ollPublication, $www);
?>
  </div>
 
</div>

<!-- -------------------------------------- -->


<footer>
  <!-- подключаем футер -->
<? include_once "footer.php" ?>
</footer>

   <!--Скрипт лучше разместить перед закрывающимся тегом body-->
<script async="true" src="https://widgets.vetmanager.cloud/js/appointment_widget_loadder.js"></script>

<!-- Скрипт Бинотеловской кнопки лучше разместить перед закрывающимся тегом body
 --><script type="text/javascript">
  (function(d, w, s) {
	var widgetHash = 'gk5wz4w135w08yobtxs5', gcw = d.createElement(s); gcw.type = 'text/javascript'; gcw.async = true;
	gcw.src = '//widgets.binotel.com/getcall/widgets/'+ widgetHash +'.js';
	var sn = d.getElementsByTagName(s)[0]; sn.parentNode.insertBefore(gcw, sn);
  })(document, window, 'script');
</script>


</body>
</html>