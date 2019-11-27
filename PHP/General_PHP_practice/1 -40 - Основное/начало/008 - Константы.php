<?php

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

//Способ-1
define("PI", 3.141592);
$r = 10;
$s = PI * $r * $r;
echo $s;
//Выведет 314.1592

//Способ-2
const NAME1 = 'Vasiya';
echo NAME1;
//Выведет Vasiya
?>
Правила для констант:
 - нет приставки $
 - не могут быть переопределены и анулированы
 - могут иметь только скалярные значения
 - пишут все буквы в ВЕРХНЕМ РЕГИСТРЕ

 =============================
 <?
define('TEST1', 41);
const TEST2 = 22;

echo TEST1;// 41
echo '<br>', TEST2;//22

define('TEST1', 66);
//Notice: Constant TEST1 already defined in ...index.php on line 13
//не может переопределить - ОШИБКА!