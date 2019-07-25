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

$a = rand(-10, 10);
$b = rand(-10, 10);


// - И    - &&
// - ИЛИ  - ||
// - НЕ   - !

function danger_game($a, $b){

if($a <= 0 && $b <= 0) {
	echo 'сам суй туда руку';
}
elseif($a > $b) {
	echo $a;
}

else {
	echo $b;
}
}

danger_game(rand(-10, 10), rand(-10, 10)) ;
danger_game(rand(-10, 10), rand(-10, 10));
danger_game(rand(-10, 10), rand(-10, 10));
danger_game(rand(-10, 10), rand(-10, 10));
danger_game(rand(-10, 10), rand(-10, 10));
danger_game(rand(-10, 10), rand(-10, 10));
danger_game(rand(-10, 10), rand(-10, 10));
danger_game(rand(-10, 10), rand(-10, 10));
danger_game(rand(-10, 10), rand(-10, 10));
danger_game(rand(-10, 10), rand(-10, 10));

















?>

<!-- ========================================== -->

<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>





