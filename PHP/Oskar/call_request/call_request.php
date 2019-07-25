<?php
header('Content-Type: text/html; charset=utf-8');
// теперь можно писать на русском без кракозяблов
//======================================================
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);

ini_set('display_startup_errors', 1);
// так отображаются все ошибки
//=======================================================

// Подключаем файл всех составляющих в виде переменных
 include_once "{$_SERVER['DOCUMENT_ROOT']}/implementer/implementer.php";

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Заказ звонка</title>
  <link rel='StyleSheet' type='text/css' href="../css/style.css" />
    <link rel='StyleSheet' type='text/css' href="../css/call_request.css" />
</head>
<body>
<!-- подключаем горизонтальное меню -->
<? include_once "{$_SERVER['DOCUMENT_ROOT']}/horisontell_meny.php" ?>


<div class="wrapper">
  <div class="wrapper1">
      <div class="wr1_1">
           <h1>Ветеринарная клиника  "Оскар"</h1>
      </div>
  </div>
<?php

echo '<br>';

echo '<h3>Заполните, пожалуйста, форму для отправки заказа звонка!</h3><br> ';

if(count($_POST) > 0) {
	$name = trim($_POST['name']);
	$phone = trim($_POST['phone']);
	$dt = date("Y-m-d H:I:s");

	if(strlen($name) < 4 ) {
		$msg = 'Нужно имя подлинее';
	}
	elseif(strlen($phone) < 7 ) {
		$msg = 'Нужно цыфр подлиннее, потерялось пару!!';
	}
	elseif(!is_numeric($phone)) {
				$msg = 'Поле с номером телефона - тольцо цыфры!!';
		}
		else{ 
	# mail("scorp1323@gmail.com", "My Subjekt", "Line 1\nLine 2\nLine 3");
	# скрипт отправки на почту, его надо проверить
	file_put_contents('apps.txt', "$dt - | - $name - | - $phone\n", FILE_APPEND);
	header("Location:afterCallRequest.php");
	// header( "refresh:8;url=../index.php" );

	// header( "refresh:8;url=afterCallRequest.php" );
	// $msg = 'Ваша заявка принята, ожидайте звонка!';
}
}
		else{
			$name = '';
			$phone = '';
			$msg = 'Привет! Заполни поля и нажми кнопку Отправить';
			# если человек пришел методом GET - получает сообщение $msg 
		}
?>

<form method="post">
	<b>Имя</b><br>
	<input type="text" name="name" placeholder="Введите имя" class="с_3" value="<?php echo $name;?>"><br>
	<b>Телефон</b><br>
	<input type="text" name="phone" placeholder="Введите телефон" class="с_3" value="<?php echo $phone; ?>"><br>
	<input type="submit" value="Отправить" class="B_2">
	<input type="reset" value="Сбросс" id="a_1">
	</form> 


<?
// echo '<h3>',$msg,'</h3>';
echo '<br><br><br><br><br>';
?> 

<footer>
  <!-- подключаем футер -->
<? include_once "{$_SERVER['DOCUMENT_ROOT']}/footer.php" ?>
</footer>

</body>
</html>