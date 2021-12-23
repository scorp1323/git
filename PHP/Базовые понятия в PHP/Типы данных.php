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



$a = 100; // целое число - integer, int
$b = 14.12; // дробь - float
$c = 'Sergey'; // строка - string, str
$d = "Sergey"; // строка - string, str
$e = array(15,33,baby,самолет,бочка);//массив, начинает считать с нуля!!!!
$f = 'marrird' => false; // boolean, bool - булев тип (правда / ложь,  true / false)
$g = 'smoking' => true;

echo $e[4];//выведет "бочка" (0=15,1=33,2=baby,3=самолет,4=бочка)
#=============================================================
# МНОГОМЕРНЫЙ МАССИВ
$f = array(
	'name' => 'Sergey',
	'surname' => 'Taranov',
	'age' => '37',
	'byear' => 1980,
	'marrird' => false,
	'smoking' => true,
	'geek' => true,
	'edukation' => array('scool in 1995', 'college in 1999')
	 );

echo "$f[name] $f[surname] " . "<br>"  ;

echo $f['edukation'][0] . "<br>";

echo $f['edukation'][1] . "<hr>";

echo $f['geek'];
#===================================================

#ФУНКЦИЯ ВЫВЕДЕНИЯ ДАТЫ!!!
echo 'сегодня'.' ' .date('d.m.y M')."<br>" . "<hr>";
#===================================================

$my_variable = 'сегодня'.' ' .date('d.m.y M')."<br>";

echo $my_variable .'<hr>';
#=====================================================








?>
<!-- ========================================== -->

<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>

<?




