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
class Person {
    public $age;
    public $first_name;
    public $last_name;
    public $balance = 0;
}




$p1 = new Person();
$p1->age = 26;
$p1->first_name = "Руслан";
$p1->last_name = "Дорофеев";
$p1->balance = "100 GBG";


$p2 = new Person();
$p2->first_name = "Боб";
$p2->last_name = "Губка";

echo $p1->first_name.'<br>'; // Руслан
echo $p2->first_name.'<br>'; // Боб

$my_var = $p2;
$my_var->first_name = "Майк";

echo $my_var->first_name.'<br>'; // Майк
echo $p2->first_name.'<br>'; // Майк