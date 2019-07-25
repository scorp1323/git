<?php

header('Content-Type: text/html; charset=utf-8');
// теперь можно писать на русском без кракозяблов
//======================================================
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
// так отображаются все ошибки
//=======================================================
?>
<html>
<?php include_once "header.php" ?>

<?php include_once "menu.php" ?>

<?php include_once "leftblock.php" ?>

<div class="content">
Контент
</div>


<?php include_once "footer.php" ?>



</html>



<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>























https://www.youtube.com/watch?v=plyIsaBpNEA&t=1495s