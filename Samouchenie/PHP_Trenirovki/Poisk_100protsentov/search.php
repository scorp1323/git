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
?>
<?php

$conn = mysqli_connect( '127.0.0.1', 'root', '' , 'veterinarnaja_baza');

	mysqli_set_charset($conn, 'utf8');  
// исправляет баг с русским шрифтом от базы 
//=======================================================


if (mysqli_connect_errno()) {
	
	echo "невозможно соединится :" . mysqli_connect_error();
} 
echo "есть связь!!!  <br> "
?>



<?php

$output = '';
if(isset($_GET['q']) &&  $_GET['q'] !== ' ') {
	$searchq = $_GET['q'] ;

	$q = mysqli_query($conn, "SELECT `last_name`, `first_name`, `middle_name`
	 FROM `customers`
	 WHERE `first_name` LIKE '%$searchq%'
	    OR `middle_name` LIKE '%$searchq%'
	    OR `last_name` LIKE '%$searchq%'") 
	or die(mysqli_error($conn));

	$c = mysqli_num_rows($q);
	if ($c == 0) {
		$output = 'Ничего не найдено по маске <b> "' . $searchq . '"</b>';
	} else {
		while ($row = mysqli_fetch_array($q)) {
			
			$l_name = $row['last_name'];
			$f_name = $row['first_name'];
			$m_name = $row['middle_name'];

			$output .= 
			$l_name . ' '  .
			 $f_name . ' ' . $m_name . ' ' . '<br>' ;
		}
	}

}

print("$output");
mysqli_close($conn) ;









?>

<!-- ========================================== -->

<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>

<?




