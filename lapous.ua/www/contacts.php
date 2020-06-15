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
// <meta name="Description" content="В интернет-магазине 5-й элемент можно купить led телевизор SAMSUNG UE40J6330AU с гарантией и доставкой.">

?>
<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="Description" content="Онлайн-запись на прием. Телефоны ветеринарной клиники Лапоус. Задать вопрос доктору.">

  <title>Контакты Ветеринарная клиника "Лапоус"</title>
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

<style>

   body {
/*    background-color:#66cc66;*/ /*цвет фона*/
   }
 /*  a{ color: #0000ff;  }*/ /*цвет текста*/
</style>




<a href="#" class="vetmanager-run-widget" data-url="https://widgets.vetmanager.cloud/frame/282">Онлайн-запись на прием</a>
<br><br><br>


<!--<a href="tel:0988991623" title="Позвонить на Киевстар"><img src="img/KS_onli_logo.svg" width="30" height="30" alt="Позвонить на Киевстар"></a><b>&nbsp KS</b>-->
<!--<a title="Позвонить на Киевстар" href="tel:0988991623">(098)8-99-16-23</a><br>-->


<!--<a href="tel:0953233984" title="Позвонить на MTS"><img src="img/MTS_logo.svg" width="30" height="30" alt="Позвонить на MTS"></a><b>&nbsp MTS</b>-->
<!--<a title="Позвонить на MTS" href="tel:0953233984">(095)32-33-984</a><br>-->


<a href="tel:0730310877" title="Позвонить на Life"><img src="img/Life_logo.svg" width="30" height="30" alt="Позвонить на Life"></a><b>&nbsp Life</b>
<a title="Позвонить на Life" href="tel:0730310877">(073) 031-08-77</a><br>


<a href="tel:0443602706" title="Телефон"><img src="img/Phone_logo.svg" width="30" height="30" alt="Телефон"></a><b>&nbsp Телефон</b>
<a title="Телефон" href="tel:0443602706">(044) 360-27-06</a><br>


<a href="viber://chat?number=+380730310877" title="Viber с компьютера"><img src="img/viber-icon.svg" width="30" height="30" alt="Viber c компьютера"></a><b>&nbsp Viber c компьютера</b>
<a title="Viber с компьютера" href="viber://chat?number=+380730310877">Viber-PC</a><br>


<a href="viber://chat?number=+380730310877" title="Viber с компьютера"><img src="img/viber-icon.svg" width="30" height="30" alt="Viber c компьютера"></a><b>&nbsp Viber c телефона</b>
<a title="Viber с телефона" href="viber://add?number=380730310877">Viber-mob</a><br>


<!--<a href="whatsapp://send?phone=+380988991623" title="WhatsApp-mob"><img src="img/whatsapp-icon.svg" width="30" height="30" alt="WhatsApp с телефона"></a><b>&nbsp WhatsApp</b>-->
<!--<a title="Viber с телефона" href="viber://add?number=380988991623">WhatsApp</a><br>-->


<a href="mailto:klinikalapous@gmail.com" title="Электронная почта"><img src="img/gmail-icon.svg" width="30" height="30" alt="Электронная почта"></a><b>&nbsp E-mail &nbsp</b>
<a title="Электронная почта" href="mailto:klinikalapous@gmail.com">	klinikalapous@gmail.com</a><br><br><br>


<!--<a href="skype:scorp1323?call" title="Skype-звонок"><img src="img/skype-icon.svg" width="30" height="30" alt="Skype-звонок"></a><b>&nbsp Skype</b>-->
<!--<a title="Skype-звонок" href="skype:scorp1323?call">Позвонить</a><br>-->


<!--<a href="skype:scorp1323?chat" title="Skype-Чат"><img src="img/skype-icon.svg" width="30" height="30" alt="Skype-Чат"></a><b>&nbsp Skype</b>-->
<!--<a title="Skype-Чат" href="skype:scorp1323?chat">Чат</a><br>-->

<div class="maps">
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10167.06717201728!2d30.6010712!3d50.4268165!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x1137b10ff2385cf6!2z0JLQtdGC0LXRgNC40L3QsNGA0L3QsNGPINC60LvQuNC90LjQutCwICLQm9CQ0J_QntCj0KEi!5e0!3m2!1sru!2sua!4v1583920988560!5m2!1sru!2sua" width="1000px" height="800px" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</div>





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