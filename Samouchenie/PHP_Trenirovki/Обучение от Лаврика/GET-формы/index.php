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


/* echo '<pre>';
	print_r($_GET);
echo '</pre>';  */
if(!isset($_GET['id'])){
	exit('Нет такого id!!!- 404');
}

$id = $_GET['id'];



$text = file_get_contents("data/$id");

?>

Шапка



<hr>
<?
	$files = scandir('data');



	foreach ($files as $file) {
	 	# code...
			if(is_file('data/' . $file)){
				echo "<a href=\"index.php?id=$file\">Новость-$file </a>";	
			}

	
	}
?>

<hr>

<?
	echo nl2br($text);


?>

<hr>
Подвал




<!-- ========================================== -->
<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>

