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

?>


<html>
	<head>
		<title>Search-Home</title>
	</head>
<body>
	
</body>
	
	<form action = "search.php" method="get">
		<input type="text" name="q" dir = "ltr">
		<input type="submit" value="go" >
	</form>

</html>













 

<!-- ========================================== -->

<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>

<?
//=========================================================
                 // Формы
//-------------------------------------------------------
 // 
// это подключить, когда нужно



