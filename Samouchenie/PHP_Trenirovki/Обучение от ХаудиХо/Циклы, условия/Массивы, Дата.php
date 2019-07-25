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


echo 'сегодня'.' ' .date('d.m.y M')."<br>" . "<hr>";
#===================================================

$my_variable = 'сегодня'.' ' .date('d.m.y M')."<br>";

echo $my_variable .'<hr>';
#=====================================================

$f = array(
	'name' => 'Sergey',
	'surname' => 'Taranov',
	'age' => '37',
	'byear' => 1980,
	'edukation' => array('scool in 1995', 'college in 1999')
	 );


echo "$f[name] $f[surname] " . "<br>"  ;

echo $f['edukation'][0] . "<br>";

echo $f['edukation'][1];




?>
<!-- ========================================== -->

<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>

<?




