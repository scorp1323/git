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
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="Cache-Control" content="no-cache">
	<link href="style.css" rel="stylesheet">
	<title>Document</title>

</head>
<body>

<div class="flex-maam">
   <div class="flex-child A1">1</div>
   <div class="flex-child A2">2</div>
   <div class="flex-child A3">3</div>
   <div class="flex-child A4">4</div>
   <div class="flex-child A5">5</div>
</div>

<hr>

<div class="flex-container">
   <div class="flex-item one">Первый</div>
   <div class="flex-item two">Второй</div>
   <div class="flex-item three">Третий</div>
</div>

</body>
</html>