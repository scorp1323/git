<?php


header('Content-Type: text/html; charset=utf-8');
// теперь можно писать на русском без кракозяблов
//======================================================

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
// так отображаются все ошибки
//=======================================================


include 'horisontell_meny.html';


?>

<h1>Страница в работе</h1>
<title>Вызов ветеринара на дом.Ветеринарная клиника Лакки</title>

<b>UMC</b> (095)32-33-984 <br>
<b>KS</b> (098)8-99-16-23 <br>
<b>Life</b> (093)88-72-6-72<br>
<b>Viber</b> (098)8-99-16-23 <br>

<b>E-mai:</b>

  <!-- Делаем активный емейл -->
<a href="mailto:scorp1323@gmail.com">scorp1323@gmail.com</a>

<?php
include 'footer.html';
?>