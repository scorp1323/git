<?php

session_start();

if(
isset($_SESSION['id']) &&
 isset($_SESSION['log']) &&
isset($_SESSION['name']) &&
 isset($_SESSION['email'])) {

echo 'Добро пожаловать ' . ', ' . $_SESSION['name'];
echo '<br>';

echo '<a href="exit.php">Выход</a> ';
} else {
  header('Location: ../index.php');
}


?>