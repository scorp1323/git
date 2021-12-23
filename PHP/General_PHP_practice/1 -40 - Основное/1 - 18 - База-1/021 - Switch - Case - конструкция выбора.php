<?php
//так всегда начинается php код(файл)
//=====================================================
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
// так отображаются все ошибки
//==========================================

?>
Усть переменная, кот. содержит день недели, обозначенный цыфрами от 1 до 7. Нам нужно вывести день недели буквами - текстом.
Можно воспользоваться if-elseif-else.
<? 
$day = 8;

if ($day == 1) {
	echo 'Понедельник';
} elseif ($day == 2) {
	echo 'Вторник';
} elseif ($day == 3) {
	echo 'Среда';
} elseif ($day == 4) {
	echo 'Четверг';
} elseif ($day == 5) {
	echo 'Пятница';
} elseif ($day == 6) {
	echo 'Суббота';
} elseif ($day == 7) {
	echo 'Воскресенье';
} else {
	echo 'Неверный день';
}
echo '<hr>';

?>
Но оператор if достаточно громоздкий. Оператор switch-case позволяет каждый раз не прописывать условия и сделать запись более лакоичной.
<?
//=======================
//То же самое, но с switch-case
$day = 5;

switch ($day) {
  case 1: echo 'Понедельник'; break;
  case 2: echo 'Вторник'    ; break;
  case 3: echo 'Среда'      ; break;
  case 4: echo 'Четверг'    ; break;
  case 5: echo 'Пятница'    ; break;
  case 6: echo 'Субота'     ; break;
  case 7: echo 'Воскресенье'; break;
  default : echo 'Неверный день'   ;
}