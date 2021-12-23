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

$h = date('H')-5;
# $img = (int) ($h / 6);
# $img = ($h / 6) % 4;
# evening  day  moning  night
if( $h <= 5 ) {
	$img = 'night';
}

elseif( $h <= 11 ) {
	$img = 'morning';
}

elseif( $h <= 17 ) {
	$img = 'day';
}

else {
	$img = 'evening';
}





?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Смена картинок - день, ночь, вечер, утро</title>
	<style type="text/css">
		body {
			background: url( img/<?php echo $img;?>.jpg);
			background-size: cover;
			color: #ff0;
		}
	</style>
</head>
<body>
	<h1><?php echo $h . '<br>'; 
	echo "$img";?></h1>
	<p>jhgkjhgkhjhjhj</p>
	<p>jhgkjhgkhjhjhj</p>
	<p>jhgkjhgkhjhjhj</p>
	<p>jhgkjhgkhjhjhj</p>
	<p>jhgkjhgkhjhjhj</p>
	<p>jhgkjhgkhjhjhj</p>
	<p>jhgkjhgkhjhjhj</p>
	<p>jhgkjhgkhjhjhj</p>
	<p>jhgkjhgkhjhjhj</p>
	<p>jhgkjhgkhjhjhj</p>
	<p>jhgkjhgkhjhjhj</p>
	<p>jhgkjhgkhjhjhj</p>
	<p>jhgkjhgkhjhjhj</p>
	<p>jhgkjhgkhjhjhj</p>
</body>
</html>







<!-- ========================================== -->

<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>






