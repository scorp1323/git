<?php

$a = 100; // целое число - integer, int
$b = 14.12; // дробь - float
$c = 'Sergey'; // строка - string, str
$d = "Sergey"; // строка - string, str
$e = array(15,33,baby,самолет,бочка);//массив - array, начинает считать с нуля!!!!

echo $e[4];//выведет "бочка" (0=15,1=33,2=baby,3=самолет,4=бочка)


echo '</br>'; // выведет перенос строки

echo '<hr>';  // выведет горизонтальную линию

echo ' ';     // выведет пробел


$f = array(
	'name' => 'Abraham',
	'surname' => 'Tugalov',
	'age' => 20,
	'byear' => 1996,
	'education' => array('school in 2003', 'college in 2013'),
	'married' => false,
	'smoking' => false,
	'geek' => true

	);// вводим массис внутри массива

echo $f['byear'];// выведет 1996
echo '<hr>';  // выведет горизонтальную линию



echo $f['education'][1];// выведет массив 2-го уровня 

$j = false; //булевев тип(да или нет) - boolean, dool


?>