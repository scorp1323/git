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


for( $i = 0; $i <= 101; $i++ )
{
	echo $i ;


if( $i % 2 == 0)
{
	echo ' - Четное число' ;
}
else 
{
	echo ' - Нечетное число';
}
echo '<br>';
}
?>
<!-- ========================================== -->

<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>

<?




