<?php
echo 'cookie не будет работать полностью на localhost';
echo '<br><br><br>';

// Имя файла cookie, в котором вы можете получить к нему доступ
$name = "test";

// Значение, которое будет сохранено в файле cookie
$value = "Cookie Value";

// Как долго cookie будет установлен
$time = time()+3600;

// Папки и область действия, доступные в
$path = "/";

// Доменное имя cookie доступно в
$host = ".test_testovich.ua";

// 1 = Доступно только в защищенных доменных именах https
// 0 = Доступно во всех доменах
$security = 0;


setcookie("test", "Cookie Value", $time , $path , $host , 0);

if (isset($_COOKIE['test'])) {

	echo $_COOKIE['test'];
}