<?php
//так всегда начинается php код(файл)
//============================================
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
// так отображаются все ошибки
//============================================

?>

<form method='POST' action='controller.php'>
  Login<input type='text' name='login'><br>
Password<input type='text' name='password'><br>
<input type='submit' name='login_ok' value='Вход'>
</form>

<a href='registration.php'>Регистрация, плиииз</a>