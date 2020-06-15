
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

include_once "$root/basa/proba.php";


GET_Header($root);


GET_Wrapper($ollPublication);


Get_Oll_Publication($ollPublication, $www);


GET_Futer($root);