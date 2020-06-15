<?php
header('Content-Type: text/html; charset=utf-8');
// теперь можно писать на русском без кракозяблов
//======================================================
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
// так отображаются все ошибки
//=======================================================


include_once "implementer/implementer.php";
include_once "implementer/MyFunctions.php";
include_once 'basa/proba.php';



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
  <link rel="stylesheet" href="css/style_price.css">
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
           
          
           <div> 
            <?

$result = $db->prepare("SELECT *   FROM price_oll ");

$result->execute();


echo '<table>';
echo '<caption><h3><b>Прайс ветеринарной клиники "Лапоус"<b></h3></caption>';

echo '<th class="first th">№ п\п</th>
    <th class="th">Наименование услуги</th>
    <th class="th">Цена, грн</th>
  </tr>';

if($result->rowCount() > 0) {
$i = 0;
  while($res = $result->fetch(PDO::FETCH_BOTH)) {
 $i++;

 echo '
 <tr class="line">
 <td class="first num">'; echo $i,'</td>';
echo '<td class="second service_name">', $res['service'], '</td>';
echo '<td class="third cost">', $res['cost'], '</td>';
echo '</tr>';  

  
  }
}

echo '</table>'; 
?>
           </div>

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

</body>
</html>