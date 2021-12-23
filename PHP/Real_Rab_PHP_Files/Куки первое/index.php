<?php
//так всегда начинается php код(файл)
//=====================================================

header('Content-Type: text/html; charset=utf-8');
// теперь можно писать на русском без кракозяблов
//======================================================

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
// так отображаются все ошибки
//=======================================================

// time() - время, прошедшее с 1970 года в секундах
// 3600 секунд = 60 минут
// 24 = 24 часа (сутки)
// 7 - 1 неделя


$expired = time()+3600*24*7;

setcookie('name', 'alex', $expired);


if(isset($_COOKIE['name'])) {
	echo $_COOKIE['name'];
	
}












?>





<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>