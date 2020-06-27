<?php
header('Content-Type: text/html; charset=utf-8');
// теперь можно писать на русском без кракозяблов
//======================================================
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
// так отображаются все ошибки
//=======================================================
//FRONT CONTROLLER = index.php

//2.Подключение файлов системы
define('ROOT', dirname(__FILE__));
echo ROOT, '<br>';

require_once ROOT . '/components/Router.php';







//3. Установка соединения с БД


//4.Вызов Роутер
$router = new Router();
$router->run();