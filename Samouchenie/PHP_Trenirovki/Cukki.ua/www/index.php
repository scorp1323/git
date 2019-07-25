<?php

$cookie_name = "user3";
$cookie_value = "cookie user";

setcookie($cookie_name, $cookie_value, time()+86400);
?>




<!DOCTYPE html>
<html lang="en, ru">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	
</body>
</html>




<?php

if(!isset($_COOKIE[$cookie_name])) {
	echo "cookie named $cookie_name";
	echo '<br>';
	echo "cookie value $cookie_value";
}

echo '<br>';
print_r($_COOKIE);

?>






<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>